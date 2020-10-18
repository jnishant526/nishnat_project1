var typed = new Typed('.typing', {
    strings: [" Technocolabs is non-profit organization which is followed by technical experts for enthusiastic learners","Artificial intelligence machine learning have great way to develop.","Technocolabs is a leading tech Startups with learn something new and innovative ideas..."],
    loop: true,
    typeSpeed: 15,
    backSpeed: 40,
    backDelay:500
  });

  

  $('#submit1').click(function(){
  
    swal("Your message has been successfully sent!", "We appreciaate you contacting us and we'll be in touch soon", "success");
  });