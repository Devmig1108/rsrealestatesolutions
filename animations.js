(() => {
  'use strict';

  const root = document.documentElement;
  const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const header = document.querySelector('.site-header');
  const navToggle = document.querySelector('.nav-toggle');

  const revealSets = [
    { selector: '.intro-grid', direction: 'up' },
    { selector: '.section-heading', direction: 'up' },
    { selector: '.service-card', direction: 'up', stagger: 110 },
    { selector: '.about-visual', direction: 'clip' },
    { selector: '.about-copy', direction: 'right' },
    { selector: '.hvac-feature-copy', direction: 'left' },
    { selector: '.hvac-feature-visual', direction: 'clip' },
    { selector: '.process-grid article', direction: 'up', stagger: 90 },
    { selector: '.nebula-grid > *', direction: 'up', stagger: 130 },
    { selector: '.final-cta-grid > *', direction: 'up', stagger: 130 },
    { selector: '.contact-grid > *', direction: 'up', stagger: 130 },
    { selector: '.footer-grid > *', direction: 'up', stagger: 80 },
    { selector: '.footer-bottom', direction: 'up' }
  ];

  const revealItems = [];

  revealSets.forEach(({ selector, direction, stagger = 0 }) => {
    document.querySelectorAll(selector).forEach((element, index) => {
      element.classList.add('reveal-item', `reveal-${direction}`);
      element.style.setProperty('--reveal-delay', `${index * stagger}ms`);
      revealItems.push(element);
    });
  });

  const linework = [...document.querySelectorAll('.architectural-linework')];
  linework.forEach((element) => element.classList.add('linework-animated'));

  const interactiveSurfaces = document.querySelectorAll(
    '.service-card, .process-grid article, .nebula-panel, .contact-form'
  );

  interactiveSurfaces.forEach((surface) => {
    surface.classList.add('interactive-surface');

    surface.addEventListener('pointermove', (event) => {
      if (reducedMotion || event.pointerType === 'touch') return;
      const rect = surface.getBoundingClientRect();
      surface.style.setProperty('--spot-x', `${event.clientX - rect.left}px`);
      surface.style.setProperty('--spot-y', `${event.clientY - rect.top}px`);
    });
  });

  const showEverything = () => {
    revealItems.forEach((element) => element.classList.add('is-visible'));
    linework.forEach((element) => element.classList.add('is-drawn'));
    root.classList.add('is-loaded');
  };

  if (reducedMotion || !('IntersectionObserver' in window)) {
    showEverything();
  } else {
    requestAnimationFrame(() => {
      requestAnimationFrame(() => root.classList.add('is-loaded'));
    });

    const revealObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      });
    }, {
      threshold: 0.12,
      rootMargin: '0px 0px -9% 0px'
    });

    revealItems.forEach((element) => revealObserver.observe(element));

    const lineObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-drawn');
        observer.unobserve(entry.target);
      });
    }, {
      threshold: 0.18,
      rootMargin: '0px 0px -10% 0px'
    });

    linework.forEach((element) => {
      if (element.classList.contains('hero-linework')) {
        window.setTimeout(() => element.classList.add('is-drawn'), 140);
      } else {
        lineObserver.observe(element);
      }
    });
  }

  if (header) {
    const progress = document.createElement('span');
    progress.className = 'scroll-progress';
    progress.setAttribute('aria-hidden', 'true');
    header.appendChild(progress);

    let frameRequested = false;

    const updateScrollEffects = () => {
      frameRequested = false;

      const scrollY = window.scrollY || window.pageYOffset;
      const scrollable = Math.max(document.documentElement.scrollHeight - window.innerHeight, 1);
      const progressValue = Math.min(scrollY / scrollable, 1);

      header.classList.toggle('is-scrolled', scrollY > 36);
      progress.style.transform = `scaleX(${progressValue})`;

      if (!reducedMotion && window.innerWidth > 800) {
        const hero = document.querySelector('.hero');
        const heroMedia = hero?.querySelector('.hero-media');
        const heroWord = hero?.querySelector('.hero-outline-word');
        const heroLine = hero?.querySelector('.hero-linework');

        if (hero && scrollY < hero.offsetHeight + 180) {
          const distance = Math.min(scrollY, hero.offsetHeight);
          heroMedia?.style.setProperty('--hero-parallax-y', `${distance * 0.075}px`);
          heroWord?.style.setProperty('--outline-parallax-y', `${distance * 0.035}px`);
          heroLine?.style.setProperty('--linework-parallax-y', `${distance * -0.025}px`);
        }
      }
    };

    const requestScrollUpdate = () => {
      if (frameRequested) return;
      frameRequested = true;
      requestAnimationFrame(updateScrollEffects);
    };

    updateScrollEffects();
    window.addEventListener('scroll', requestScrollUpdate, { passive: true });
    window.addEventListener('resize', requestScrollUpdate, { passive: true });
  }

  const hero = document.querySelector('.hero');
  if (hero && !reducedMotion) {
    hero.addEventListener('pointermove', (event) => {
      if (event.pointerType === 'touch') return;
      const rect = hero.getBoundingClientRect();
      hero.style.setProperty('--hero-pointer-x', `${event.clientX - rect.left}px`);
      hero.style.setProperty('--hero-pointer-y', `${event.clientY - rect.top}px`);
    });

    hero.addEventListener('pointerleave', () => {
      hero.style.removeProperty('--hero-pointer-x');
      hero.style.removeProperty('--hero-pointer-y');
    });
  }

  if (navToggle) {
    document.querySelectorAll('.main-nav a').forEach((link) => {
      link.addEventListener('click', () => {
        navToggle.checked = false;
      });
    });
  }
})();
