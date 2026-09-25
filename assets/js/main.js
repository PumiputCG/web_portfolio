'use strict';

(function () {
  let languageRestored = false;

  const onReady = (callback) => {
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', callback, { once: true });
      return;
    }
    callback();
  };

  onReady(() => {
    initLoader();
    initHeader();
    initMenu();
    initTravelGridPagination();
    initTravelTabs();
    initTravelStage();
    initContactEmail();
    initLineQrDialog();
    initLanguageScrollMemory();
    initPhotoSliders();
    initLifePath();
    initPortfolioOpening();
  });

  function initPortfolioOpening() {
    const band = document.getElementById('intro');
    const head = document.getElementById('introHead');
    if (!band || !head || !document.body.classList.contains('page-portfolio')) return;
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

    if ('scrollRestoration' in window.history) window.history.scrollRestoration = 'manual';
    const hash = window.location.hash;
    if ((hash && hash !== '#intro') || languageRestored) return;
    if (window.scrollY > 0) window.scrollTo({ top: 0, left: 0, behavior: 'instant' });

    const role = head.querySelector('.about-role');
    const lead = head.querySelector('.pf-lead');
    let centered = false;
    let lockedUntil = 0;
    let touchY = null;

    const centerTransform = () => {
      const saved = head.style.transform;
      head.style.transform = 'none';
      const box = head.getBoundingClientRect();
      const a = role.getBoundingClientRect();
      const b = lead.getBoundingClientRect();
      head.style.transform = saved;
      const left = Math.min(a.left, b.left);
      const right = Math.max(a.right, b.right);
      const top = Math.min(a.top, b.top);
      const bottom = Math.max(a.bottom, b.bottom);
      const viewW = document.documentElement.clientWidth;
      const room = viewW - 2 * parseFloat(window.getComputedStyle(band).paddingLeft);
      const scale = Math.max(1, Math.min(1.06, room / (right - left)));
      const ox = (box.left + box.right) / 2;
      const oy = (box.top + box.bottom) / 2;
      const dx = viewW / 2 - ox - scale * ((left + right) / 2 - ox);
      const dy = window.innerHeight / 2 - oy - scale * ((top + bottom) / 2 - oy);
      return `translate(${dx.toFixed(1)}px, ${dy.toFixed(1)}px) scale(${scale.toFixed(3)})`;
    };

    const snapToCenter = () => {
      head.style.transition = 'none';
      head.style.transform = centerTransform();
      void head.offsetWidth;
      head.style.transition = '';
    };

    const toPlace = () => {
      if (!centered) return;
      centered = false;
      lockedUntil = performance.now() + 700;
      band.classList.remove('is-opening');
      head.style.transform = '';
    };

    const toCenter = () => {
      if (centered) return;
      centered = true;
      lockedUntil = performance.now() + 700;
      band.classList.add('is-opening');
      head.style.transform = centerTransform();
    };

    const intent = (event, down) => {
      if (centered) {
        event.preventDefault();
        if (down && performance.now() > lockedUntil) toPlace();
        return;
      }
      if (!down && window.scrollY <= 0 && performance.now() > lockedUntil) {
        event.preventDefault();
        toCenter();
      }
    };

    const onWheel = (event) => {
      if (event.deltaY !== 0) intent(event, event.deltaY > 0);
    };
    const onTouchStart = (event) => {
      touchY = event.touches[0].clientY;
    };
    const onTouchMove = (event) => {
      if (touchY === null) return;
      const dy = touchY - event.touches[0].clientY;
      if (Math.abs(dy) < 8) return;
      intent(event, dy > 0);
    };
    const onKey = (event) => {
      if (['ArrowDown', 'PageDown', 'End', ' ', 'Spacebar'].includes(event.key)) intent(event, true);
      else if (['ArrowUp', 'PageUp', 'Home'].includes(event.key)) intent(event, false);
    };
    const onScroll = () => {
      if (centered && window.scrollY > 0) toPlace();
    };
    const onResize = () => {
      if (centered) snapToCenter();
    };

    centered = true;
    band.classList.add('is-opening');
    snapToCenter();
    window.addEventListener('wheel', onWheel, { passive: false });
    window.addEventListener('touchstart', onTouchStart, { passive: true });
    window.addEventListener('touchmove', onTouchMove, { passive: false });
    window.addEventListener('keydown', onKey);
    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', onResize);
    window.addEventListener('hashchange', toPlace);
    if (document.fonts && document.fonts.ready) {
      document.fonts.ready.then(() => { if (centered) snapToCenter(); });
    }
  }

  function initLoader() {
    const loader = document.querySelector('.page-loader');
    const revealPage = () => {
      document.documentElement.classList.add('is-ready');
      if (!loader) return;
      loader.classList.add('is-hidden');
      window.setTimeout(() => loader.remove(), 1000);
    };

    window.addEventListener('load', revealPage, { once: true });
    window.setTimeout(revealPage, 1800);
  }

  function initHeader() {
    const header = document.getElementById('siteHeader');
    if (!header) return;

    let ticking = false;
    const update = () => {
      header.classList.toggle('is-scrolled', window.scrollY > 24);
      ticking = false;
    };

    const onScroll = () => {
      if (ticking) return;
      ticking = true;
      window.requestAnimationFrame(update);
    };

    window.addEventListener('scroll', onScroll, { passive: true });
    update();
  }

  function initMenu() {
    const button = document.getElementById('menuButton');
    const menu = document.getElementById('mobileMenu');
    if (!button || !menu) return;

    const groups = Array.from(menu.querySelectorAll('.m-group'));

    const closeGroups = () => {
      groups.forEach((group) => {
        group.classList.remove('is-open');
        const trigger = group.querySelector('.m-group-trigger');
        if (trigger) trigger.setAttribute('aria-expanded', 'false');
      });
    };

    const setOpen = (open) => {
      button.classList.toggle('is-open', open);
      menu.classList.toggle('is-open', open);
      document.body.classList.toggle('menu-open', open);
      button.setAttribute('aria-expanded', String(open));
      button.setAttribute(
        'aria-label',
        open ? button.dataset.closeLabel : button.dataset.openLabel
      );
      if (!open) closeGroups();
    };

    button.addEventListener('click', () => {
      setOpen(!menu.classList.contains('is-open'));
    });

    groups.forEach((group) => {
      const trigger = group.querySelector('.m-group-trigger');
      if (!trigger) return;
      trigger.addEventListener('click', (event) => {
        event.preventDefault();
        const open = !group.classList.contains('is-open');
        closeGroups();
        group.classList.toggle('is-open', open);
        trigger.setAttribute('aria-expanded', String(open));
      });
    });

    menu.querySelectorAll('a:not(.m-group-trigger)').forEach((link) => {
      link.addEventListener('click', () => setOpen(false));
    });

    document.addEventListener('click', (event) => {
      if (!menu.classList.contains('is-open')) return;
      if (button.contains(event.target) || menu.contains(event.target)) return;
      setOpen(false);
    });

    document.addEventListener('keydown', (event) => {
      if (event.key === 'Escape') setOpen(false);
    });
  }

  function initTravelTabs() {
    const tabs = Array.from(document.querySelectorAll('.travel-tab'));
    const panels = Array.from(document.querySelectorAll('.travel-panel'));
    if (!tabs.length || !panels.length) return;

    const activate = (country) => {
      tabs.forEach((tab) => {
        const on = tab.dataset.country === country;
        tab.classList.toggle('is-active', on);
        tab.setAttribute('aria-selected', String(on));
        tab.tabIndex = on ? 0 : -1;
      });
      panels.forEach((panel) => {
        const on = panel.dataset.country === country;
        panel.classList.toggle('is-active', on);
        panel.hidden = !on;
      });
    };

    tabs.forEach((tab) => {
      tab.addEventListener('click', () => activate(tab.dataset.country));
    });
  }

  function initTravelGridPagination() {
    document.querySelectorAll('.travel-panel').forEach((panel) => {
      const track = panel.querySelector('.travel-grid-track');
      const pages = Array.from(panel.querySelectorAll('.travel-grid-page'));
      const pager = panel.querySelector('.travel-pager');
      const dots = pager ? Array.from(pager.querySelectorAll('.travel-pager-dot')) : [];
      const prevButton = pager ? pager.querySelector('.travel-pager-prev') : null;
      const nextButton = pager ? pager.querySelector('.travel-pager-next') : null;
      let current = 0;

      const showPage = (i) => {
        if (!pages.length) return;
        current = Math.max(0, Math.min(i, pages.length - 1));
        if (track) {
          track.style.transform = 'translateX(-' + current * 100 + '%)';
        }
        pages.forEach((page, pi) => {
          const on = pi === current;
          page.classList.toggle('is-active', on);
          page.toggleAttribute('inert', !on);
          page.setAttribute('aria-hidden', String(!on));
        });
        dots.forEach((dot, di) => dot.classList.toggle('is-active', di === current));
        if (prevButton) prevButton.disabled = current === 0;
        if (nextButton) nextButton.disabled = current === pages.length - 1;
      };

      if (prevButton) prevButton.addEventListener('click', () => showPage(current - 1));
      if (nextButton) nextButton.addEventListener('click', () => showPage(current + 1));
      dots.forEach((dot, di) => dot.addEventListener('click', () => showPage(di)));
    });
  }

  function onSwipe(el, callback) {
    let startX = null;
    let startY = 0;
    el.addEventListener('touchstart', (event) => {
      if (event.touches.length !== 1) {
        startX = null;
        return;
      }
      startX = event.touches[0].clientX;
      startY = event.touches[0].clientY;
    }, { passive: true });
    el.addEventListener('touchend', (event) => {
      if (startX === null) return;
      const dx = event.changedTouches[0].clientX - startX;
      const dy = event.changedTouches[0].clientY - startY;
      startX = null;
      if (Math.abs(dx) > 40 && Math.abs(dx) > Math.abs(dy) * 1.5) callback(dx < 0 ? 1 : -1);
    }, { passive: true });
  }

  function initTravelStage() {
    const stage = document.getElementById('travelStage');
    const dataEl = document.getElementById('travelStageData');
    if (!stage || !dataEl) return;

    let data;
    try {
      data = JSON.parse(dataEl.textContent);
    } catch (error) {
      return;
    }

    const els = {
      image: document.getElementById('stageImage'),
      date: document.getElementById('stageDate'),
      thumbs: document.getElementById('stageThumbs'),
      place: document.getElementById('stagePlace'),
      title: document.getElementById('stageTitle'),
      desc: document.getElementById('stageDesc'),
      prev: document.getElementById('stagePrev'),
      next: document.getElementById('stageNext'),
    };
    if (!els.image) return;

    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    let sequence = [];
    let index = 0;
    let paused = false;
    let timer = null;

    const setImage = (src, alt) => {
      els.image.classList.add('is-fading');
      const pre = new Image();
      const swap = () => {
        els.image.src = src;
        els.image.alt = alt || '';
        window.requestAnimationFrame(() => els.image.classList.remove('is-fading'));
      };
      pre.onload = swap;
      pre.onerror = swap;
      pre.src = src;
    };

    const heading = els.title.parentElement;
    const fitTitle = () => {
      heading.style.fontSize = '';
      let size = parseFloat(window.getComputedStyle(heading).fontSize);
      while (heading.scrollWidth > heading.clientWidth && size > 14) {
        size -= 1;
        heading.style.fontSize = `${size}px`;
      }
    };
    window.addEventListener('resize', fitTitle, { passive: true });
    if (document.fonts && document.fonts.ready) document.fonts.ready.then(fitTitle);
    fitTitle();

    const renderThumbs = (place) => {
      els.thumbs.innerHTML = '';
      if (place.images.length < 2) {
        els.thumbs.hidden = true;
        return;
      }
      els.thumbs.hidden = false;
      place.images.forEach((src, i) => {
        const button = document.createElement('button');
        button.type = 'button';
        button.className = 'travel-stage-thumb' + (i === 0 ? ' is-active' : '');
        const thumb = new Image();
        thumb.src = src;
        thumb.alt = '';
        button.appendChild(thumb);
        button.addEventListener('click', () => {
          setImage(src, place.alt);
          Array.from(els.thumbs.children).forEach((child, ci) => {
            child.classList.toggle('is-active', ci === i);
          });
        });
        els.thumbs.appendChild(button);
      });
    };

    const render = (i) => {
      if (!sequence.length) return;
      index = (i + sequence.length) % sequence.length;
      const item = sequence[index];
      const c = data[item.country];
      const place = c.places.find((p) => p.id === item.id) || c.places[0];
      setImage(place.images[0], place.alt);
      els.date.textContent = place.date.join(' ');
      els.place.textContent = c.label;
      els.title.textContent = place.title;
      els.desc.textContent = place.desc;
      fitTitle();
      renderThumbs(place);
    };

    const stopTimer = () => {
      if (timer) {
        window.clearInterval(timer);
        timer = null;
      }
    };

    const startTimer = () => {
      stopTimer();
      if (reduceMotion || sequence.length < 2) return;
      timer = window.setInterval(() => {
        if (!paused) render(index + 1);
      }, 4500);
    };

    const setCountry = (country) => {
      const c = data[country];
      if (!c || !c.places.length) return;
      sequence = c.places.map((p) => ({ country: country, id: p.id }));
      render(0);
      startTimer();
    };

    // Prev / next controls
    if (els.prev) {
      els.prev.addEventListener('click', () => {
        render(index - 1);
        startTimer();
      });
    }
    if (els.next) {
      els.next.addEventListener('click', () => {
        render(index + 1);
        startTimer();
      });
    }
    onSwipe(els.image.parentElement, (step) => {
      render(index + step);
      startTimer();
    });

    stage.addEventListener('mouseenter', () => { paused = true; });
    stage.addEventListener('mouseleave', () => { paused = false; });

    document.querySelectorAll('.travel-card[data-place]').forEach((card) => {
      card.addEventListener('click', (event) => {
        event.preventDefault();
        const country = card.dataset.country;
        if (!sequence.length || sequence[0].country !== country) setCountry(country);
        const target = sequence.findIndex((s) => s.id === card.dataset.place);
        render(target < 0 ? 0 : target);
        startTimer();
        stage.scrollIntoView({ behavior: 'smooth', block: 'center' });
      });
    });

    document.querySelectorAll('.travel-tab').forEach((tab) => {
      tab.addEventListener('click', () => setCountry(tab.dataset.country));
    });

    const activeTab = document.querySelector('.travel-tab.is-active');
    setCountry(activeTab ? activeTab.dataset.country : Object.keys(data)[0]);
  }

  function initLifePath() {
    const list = document.getElementById('lifePath');
    if (!list) return;

    const items = Array.from(list.querySelectorAll('.path-item'));
    const fill = list.querySelector('.path-line-fill');
    if (!items.length) return;

    if (fill) fill.style.setProperty('--path-progress', '0%');

    let ticking = false;

    const update = () => {
      ticking = false;
      const mark = window.innerHeight * 0.72;
      let reached = 0;

      items.forEach((item) => {
        const top = item.getBoundingClientRect().top;
        const on = top < mark;
        item.classList.toggle('is-reached', on);
        if (on) reached += 1;
      });

      if (!fill) return;
      const box = list.getBoundingClientRect();
      const progress = (mark - box.top) / box.height;
      fill.style.setProperty(
        '--path-progress',
        (Math.max(0, Math.min(1, progress)) * 100).toFixed(2) + '%'
      );
      if (reached === items.length) fill.style.setProperty('--path-progress', '100%');
    };

    const onScroll = () => {
      if (ticking) return;
      ticking = true;
      window.requestAnimationFrame(update);
    };

    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', onScroll, { passive: true });
    update();
  }

  function initPhotoSliders() {
    const cards = Array.from(document.querySelectorAll('[data-slider-card]'));
    if (!cards.length) return;

    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    const loadSet = (card) => {
      card.querySelectorAll('img[loading="lazy"]').forEach((img) => {
        img.loading = 'eager';
      });
    };

    if ('IntersectionObserver' in window) {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          entry.target.classList.toggle('is-running', entry.isIntersecting);
          if (entry.isIntersecting) loadSet(entry.target);
        });
      }, { threshold: 0.35 });
      cards.forEach((card) => observer.observe(card));
    } else {
      cards.forEach((card) => {
        card.classList.add('is-running');
        loadSet(card);
      });
    }

    cards.forEach((card) => {
      const slider = card.querySelector('[data-photo-slider]');
      if (!slider) return;

      const track = slider.querySelector('.photo-track');
      const slides = Array.from(track.children);
      const bars = Array.from(card.querySelectorAll('.photo-bars button'));
      const count = slides.length;
      let index = 0;
      let looping = false;

      const loopCopy = slides[0].cloneNode(true);
      loopCopy.classList.remove('is-active');
      loopCopy.setAttribute('aria-hidden', 'true');
      loopCopy.querySelector('img').alt = '';
      track.appendChild(loopCopy);

      const setSlide = (active) => {
        slides.forEach((slide, i) => {
          const on = i === active;
          slide.classList.toggle('is-active', on);
          if (on) slide.removeAttribute('aria-hidden');
          else slide.setAttribute('aria-hidden', 'true');
        });
      };

      const setBars = (active) => {
        bars.forEach((bar, i) => {
          bar.classList.toggle('is-active', i === active);
          bar.classList.toggle('is-done', i < active);
          if (i === active) bar.setAttribute('aria-current', 'true');
          else bar.removeAttribute('aria-current');
        });
      };

      const moveTo = (position, animate) => {
        if (!animate) track.style.transition = 'none';
        track.style.transform = 'translateX(-' + position * 100 + '%)';
        if (!animate) {
          void track.offsetWidth;
          track.style.transition = '';
        }
      };

      const go = (next) => {
        if (next < 0) {
          looping = false;
          index = count - 1;
          moveTo(index, true);
          setSlide(index);
          setBars(index);
          return;
        }
        if (next >= count) {
          index = 0;
          looping = true;
          moveTo(count, true);
          setSlide(-1);
          setBars(0);
          return;
        }
        looping = false;
        index = next;
        moveTo(index, true);
        setSlide(index);
        setBars(index);
      };

      track.addEventListener('transitionend', (event) => {
        if (event.target !== track || event.propertyName !== 'transform' || !looping) return;
        looping = false;
        moveTo(0, false);
        setSlide(0);
      });

      const prevArrow = slider.querySelector('.photo-nav-prev');
      const nextArrow = slider.querySelector('.photo-nav-next');
      if (prevArrow) prevArrow.addEventListener('click', () => go(index - 1));
      if (nextArrow) nextArrow.addEventListener('click', () => go(index + 1));
      onSwipe(slider, (step) => go(index + step));

      bars.forEach((bar, i) => {
        bar.addEventListener('click', () => go(i));
        if (reduceMotion) return;
        bar.querySelector('.photo-bar-fill').addEventListener('animationend', () => {
          if (bar.classList.contains('is-active')) go(index + 1);
        });
      });
    });
  }

  function initLanguageScrollMemory() {
    const KEY = 'langScrollY';

    document.querySelectorAll('.language-link').forEach((link) => {
      link.addEventListener('click', () => {
        try {
          window.sessionStorage.setItem(KEY, String(Math.round(window.scrollY)));
        } catch (error) {
        }
      });
    });

    let saved = null;
    try {
      saved = window.sessionStorage.getItem(KEY);
      window.sessionStorage.removeItem(KEY);
    } catch (error) {
      return;
    }
    if (saved === null) return;

    const top = Number(saved);
    if (!Number.isFinite(top) || top <= 0) return;

    languageRestored = true;
    const restore = () => window.scrollTo({ top: top, left: 0, behavior: 'instant' });
    restore();
    window.addEventListener('load', restore, { once: true });
  }

  function initContactEmail() {
    const form = document.getElementById('contactEmailForm');
    const input = document.getElementById('contactEmail');
    if (!form || !input) return;

    form.addEventListener('submit', (event) => {
      event.preventDefault();
      if (!input.reportValidity()) return;

      const recipient = form.dataset.recipient;
      const subject = form.dataset.subject;
      const body = `${form.dataset.message} ${input.value.trim()}.\n\n`;
      window.location.href = `mailto:${recipient}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
    });
  }

  function initLineQrDialog() {
    const dialog = document.getElementById('lineQrDialog');
    const openButton = document.getElementById('lineQrOpen');
    const closeButton = document.getElementById('lineQrClose');
    if (!dialog || !openButton || !closeButton) return;

    openButton.addEventListener('click', () => dialog.showModal());
    closeButton.addEventListener('click', () => dialog.close());

    dialog.addEventListener('click', (event) => {
      if (event.target === dialog) dialog.close();
    });
  }
})();
