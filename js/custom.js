$('.branch-departments:nth-child(2n+1) .department-text').addClass('order-md-2');
$('.branch-departments:nth-child(2n+1) .department-photo').addClass('order-md-1');


//newscarousel
var swiper = new Swiper('#news-carousel', {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  navigation: {
    nextEl: '.my-swiper-button-next',
    prevEl: '.my-swiper-button-prev',
  }
});


//history carousel
var swiper = new Swiper('#history-carousel', {
  slidesPerView: 5,
  spaceBetween: 0,
  loop: true,
  navigation: {
    nextEl: '.my-swiper-button-next',
    prevEl: '.my-swiper-button-prev',
  },
  breakpoints: {
      1200: {
        slidesPerView: 3,
        spaceBetween: 0,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 0,
      },
      480: {
        slidesPerView: 1,
        spaceBetween: 0,
      }
    }
});

//project managers carousel
var swiper = new Swiper('#project-managers-carousel', {
  slidesPerView: 5,
  spaceBetween: 10,
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  breakpoints: {
      1200: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      576: {
        slidesPerView: 1,
        spaceBetween: 10,
      }
    }
});

//publishing activity carousel
var swiper = new Swiper('#publishing-activity-carousel', {
  slidesPerView: 3,
  spaceBetween: 10,
  loop: true,
  navigation: {
    nextEl: '.my-swiper-button-next',
    prevEl: '.my-swiper-button-prev',
  },
  breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      576: {
        slidesPerView: 1,
        spaceBetween: 10,
      }
    }
});

//awards carousel
var swiper = new Swiper('#awards-carousel', {
  slidesPerView: 3,
  spaceBetween: 10,
  loop: true,
  navigation: {
    nextEl: '.my-swiper-button-next',
    prevEl: '.my-swiper-button-prev',
  },
  breakpoints: {
      1440: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      992: {
        slidesPerView: 1,
        spaceBetween: 10,
      }
    }
});

//management carousel
  var swiper = new Swiper('#management-carousel', {
    slidesPerView: 5,
    spaceBetween: 10,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
        1200: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        992: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        576: {
          slidesPerView: 1,
          spaceBetween: 10,
        }
      }
  });

  //branches carousel
  var swiper = new Swiper('#branches-carousel', {
    slidesPerView: 4,
    spaceBetween: 40,
    loop: true,
    navigation: {
      nextEl: '.my-swiper-button-next',
      prevEl: '.my-swiper-button-prev',
    },
    breakpoints: {
        1200: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        996: {
          slidesPerView: 2,
          spaceBetween: 30,
        }
      }
  });

   //partners carousel
   var swiper = new Swiper('#partners-carousel', {
    slidesPerView: 4,
    spaceBetween: 40,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        1200: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        992: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 10,
        }
      }
  });
