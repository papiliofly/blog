const Timeline__Section1__1 = gsap.timeline({
    scrollTrigger: {
      trigger: '.section-1',
      markers:true,
      start:'top 10%',
      end:'bottom bottom',
      toggleActions: "restart none none none"
    }
  });
  
  Timeline__Section1__1.from('.section-1__txt-1', {
    opacity:0,
    x:-50,
    duration:1
  });
  
  Timeline__Section2__1.from('.section-1__txt-2', {
    opacity:0,
    x:50,
    duration:1
  }, "-=0.5");
  
  gsap.from('.section-3', {
    x:-500,
    opacity:0,
    duration:1,
    scrollTrigger:{
      trigger:'.section-3',
      markers:true,
      start:'50% bottom',
      end:'80% bottom',
      scrub:true
    }
  });