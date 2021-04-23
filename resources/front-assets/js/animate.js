document.addEventListener('DOMContentLoaded', function() {
	
	// .section-slider-promo
	if ( document.querySelector('.section-slider-promo') != null && window.innerWidth > 767 ) {
		(function() {
			var slider  = document.querySelector('.section-slider-promo .slider');
			var items   = gsap.utils.toArray('.section-slider-promo .slider .item');
			var content = gsap.utils.toArray('.section-slider-promo .slider .item .content');
			var button  = document.querySelector('.section-slider-promo .slider .btn-top-bottom');
			
			gsap.to(items, {
				scrollTrigger: { trigger: slider, scrub: true, ease: 'none', start: 'top top', end: 'bottom top' },
				yPercent: 25
			});
			
			gsap.to(content, {
				scrollTrigger: { trigger: slider, scrub: true, ease: 'none', start: 'top top', end: 'bottom top' },
				opacity: 0.3
			});
			
			gsap.to(button, {
				scrollTrigger: { trigger: slider, scrub: true, ease: 'none', start: 'top top', end: 'bottom 20%' },
				opacity: 0
			});
			
			gsap.timeline({repeat: -1, repeatDelay: 2})
				.to(button, {y: -50,  duration: 0.5})
				.to(button, {y: 0, duration: 1, ease: 'bounce.out'});
		}());
	}
	
	// .section-about
	if ( document.querySelector('.section-about') != null && window.innerWidth > 767 ) {
		(function() {
			var sect  = document.querySelector('.section-about > .inner');
			var elems = sect.querySelectorAll('.content .info, .content .figure');
			
			gsap.set(elems, {
				y: 100,
				opacity: 0
			});
			
			ScrollTrigger.create({
				trigger: sect,
				start: 'top 100%',
				onEnter: function() {
					gsap.to(elems, { y: 0, opacity: 1, duration: 1.5, stagger: -0.25, ease: 'power3.out', overwrite: 'auto' });
				},
				onLeaveBack: function() {
					gsap.to(elems, { y: 100, opacity: 0, ease: 'power3.out', overwrite: 'auto' });
				}
			});
		}());
	}
	
	// .section-some-work
	if ( document.querySelector('.section-some-work') != null && window.innerWidth > 767 ) {
		(function() {
			var sect  = document.querySelector('.section-some-work > .inner');
			var elems = sect.querySelectorAll('.header h2, .header .subtitle, .slider-toggler, .slider-content');
			
			gsap.set(elems, { y: 100, opacity: 0});
			
			ScrollTrigger.create({
				trigger: sect,
				start: 'top 100%',
				onEnter: function() {
					gsap.to(elems, { y: 0, opacity: 1, duration: 1.5, stagger: 0.2, ease: 'power3.out', overwrite: 'auto' });
				},
				onLeaveBack: function() {
					gsap.to(elems, { y: 100, opacity: 0, ease: 'power3.out', overwrite: 'auto' });
				}
			});
		}());
	}
	
	// .section-portfolio
	if ( document.querySelector('.section-portfolio') != null && window.innerWidth > 767 ) {
		(function() {
			var sect  = document.querySelector('.section-portfolio > .inner');
			var elems1 = sect.querySelectorAll('.header h2, .content .list');
			var elems2 = gsap.utils.toArray(sect.querySelectorAll('.content .list .item'));
			
			gsap.set(elems1, {y: 100, opacity: 0});
			gsap.set(elems2, {opacity: 0});
			
			ScrollTrigger.create({
				trigger: sect,
				start: 'top 100%',
				onEnter: function() {
					gsap.to(elems1, {y: 0, opacity: 1, duration: 1.5, stagger: 0.2, ease: 'power3.out', overwrite: 'auto'});
				},
				onLeaveBack: function() {
					gsap.to(elems1, {y: 100, opacity: 0, ease: 'power3.out', overwrite: 'auto'});
				}
			});
			
			ScrollTrigger.batch(elems2, {
				batchMax: 2,
				start: 'top-=100px bottom',
				onEnter: function(batch) {
					gsap.to(batch, {opacity: 1, duration: 1, stagger: 0.2, overwrite: true});
				},
				onLeaveBack: function(batch) {
					gsap.to(batch, {opacity: 0, duration: 0.5, overwrite: true});
				}
			});
		}());
	}
	
	// .section-partners
	if ( document.querySelector('.section-partners') != null && window.innerWidth > 767 ) {
		(function() {
			var sect  = document.querySelector('.section-partners > .inner');
			var elems = sect.querySelectorAll('.header h2, .content');
			
			gsap.set(elems, {y: 100, opacity: 0});
			
			ScrollTrigger.create({
				trigger: sect,
				start: 'top 100%',
				onEnter: function() {
					gsap.to(elems, {y: 0, opacity: 1, duration: 1.5, stagger: 0.2, ease: 'power3.out', overwrite: 'auto'});
				},
				onLeaveBack: function() {
					gsap.to(elems, {y: 100, opacity: 0, ease: 'power3.out', overwrite: 'auto'});
				}
			});
		}());
	}
	
	// .section-contact
	if ( document.querySelector('.section-contact') != null && window.innerWidth > 767 ) {
		(function() {
			var sect  = document.querySelector('.section-contact > .inner');
			var elems = sect.querySelectorAll('.header h2, .content, .bottom');
			
			gsap.set(elems, {y: 100, opacity: 0});
			
			ScrollTrigger.create({
				trigger: sect,
				start: 'top 100%',
				onEnter: function() {
					gsap.to(elems, {y: 0, opacity: 1, duration: 1.5, stagger: 0.2, ease: 'power3.out', overwrite: 'auto'});
				},
				onLeaveBack: function() {
					gsap.to(elems, {y: 100, opacity: 0, ease: 'power3.out', overwrite: 'auto'});
				}
			});
		}());
	}
	
});