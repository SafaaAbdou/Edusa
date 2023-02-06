let courseNum=1;let testimonialSlideIndex=0;show_course(courseNum);show_testimonial();function open_courses(){window.open("site_url()/course","_self")}
function open_about(){window.open("site_url()/about-us","_self")}
function get_course(n){show_course(courseNum+=n)}
function show_course(n){let i;let courses=document.getElementsByClassName("pop-item");if(n>courses.length){courseNum=1}
if(n<1){courseNum=courses.length}
for(i=0;i<courses.length;i++){courses[i].style.display="flex"}
courses[courseNum-1].style.display="none"}
function show_testimonial(){let i;let slides=document.getElementsByClassName("slides");let dots=document.getElementsByClassName("dot");for(i=0;i<slides.length;i++){slides[i].style.display="none"}
testimonialSlideIndex++;if(testimonialSlideIndex>slides.length){testimonialSlideIndex=1}
for(i=0;i<dots.length;i++){dots[i].className=dots[i].className.replace(" active","")}
slides[testimonialSlideIndex-1].style.display="grid";dots[testimonialSlideIndex-1].className+=" active";setTimeout(show_testimonial,4000)}
;