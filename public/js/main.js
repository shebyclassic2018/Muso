$(document).ready(function(){
    var close = true;
    Navigation_links();
    $('.scrollTop').click(function(){
        ScrollTop('container');
    })
    showImage();
    DashboardMenu()
    hideAlertBox();
    logout();
    openPlayerOverlay();
    closePlayerOverlay();
});

function Navigation_links(){
    //ABOUT US NAVIGATION LINK
    click_to_open('about-us','about-us','_SELF')
    
    //HOME NAVIGATION LINK
    click_to_open('home-link', '/', '_SELF')

    //LEADER LINK
    click_to_open('more-leaders', '/leaders/3', '_SELF')
   
    //OUR GALLERY LINK
    click_to_open('our-gallery', '/ourgallery', '_SELF')

    // GALLERY FORM LINKS
    click_to_open('galleryForm', '/galleryForm','screen')

    
    //NEWS & UPDATE LINK
    click_to_open('news-link', '#news', '_SELF')
    
    //ADMIN LEADER FORM LINK
    click_to_open('leader-form', '/leader-form/1','screen')

    // ADD MININSTRY, FACULTY, DURATION LINK
    click_to_open('add', '/add','screen')

    // OUR SITE LINKS
    click_to_open('our-site', '/','screen')

    // ADD EVENT LINKS
    click_to_open('event', '/event','screen')

    // ADD NEWS LINKS
    click_to_open('news', 'news','screen')

    
    

    // ------->ADD PAGE NAVIGATION LINKS
        // var pages = ['ministry','faculty','duration'];

        // // ADD PAGE ONLOAD
        // fadeInActivePage(pages,'ministry');

        // $('.ministry-btn').click(function(){
        //     fadeInActivePage(pages,'ministry');
        // })

        // $('.faculty-btn').click(function(){
        //     fadeInActivePage(pages,'faculty');
        // })

        // $('.duration-btn').click(function(){
        //     fadeInActivePage(pages,'duration');
        // })
}

function showImage(){
    previewFileDetails("#passport",'row-with-passport',"#img");
    previewFileDetails("#poster",'poster-row','.poster-img');
}



function ScrollTop(section){
    var btn = document.getElementById(section);

    btn.addEventListener('click', () => window.scrollTo({
        top: 0,
        behavior: 'smooth',
    }))
}

function DashboardMenu(){
    $('.dashboard-menu').hide();
    $('.dashboard').click(function(){
        $('.dashboard-menu').slideToggle();
    })
}

function hideAlertBox(){
    $('.alert-body').css('visibility','hidden');
}

function logout(){
    $('#logout-btn').click(function(){
        $('.alert-body').css('visibility','visible');
    });

    $('#cancel-logout').click(function(){
        hideAlertBox();
    })
}

function openPlayerOverlay(){
        $('.open-overlay').click(function(){
            $('.overlay').css('transform', 'translateX(0)');
        })   
}

function closePlayerOverlay() {
    $('.close-overlay').click(function(){
        $('.overlay').css('transform', 'translate(-100%)');
    })
}
