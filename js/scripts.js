//var showSearch = $('form.page-header__search-form').hide();

var pageClick = $('div.page-header__search-box');
pageClick.on('click', function(){
    var showSearch = $('form.page-header__search-form').removeClass('hide');
    pageClick.addClass('hide');
});

var closeSearch = $('button.page-head-search-close');
closeSearch.on('click', function(){
    $('form.page-header__search-form').addClass('hide');
    pageClick.removeClass('hide');
});

var loginClose = $('button.login-popup__close');

loginClose.on('click', function(){
    $('section.login-section').hide();
});

var signInClick = $('li.login-nav__li').find('a');
var registerClick = $('li.login-nav__li last').find('a');
var signInClick2 = $('li.page-header__li').find('a');
var registerClick2 = $('li.page-header__li').find('a');

(signInClick).on('click', function(e){
    e.preventDefault();
    $('section.login-section').removeClass('hide');
});

(registerClick).on('click', function(e){
    e.preventDefault();
    $('section.login-section').removeClass('hide');
});

(signInClick2).on('click', function(e){
    e.preventDefault();
    $('section.login-section').removeClass('hide');
});

(registerClick2).on('click', function(e){
    e.preventDefault();
    $('section.login-section').removeClass('hide');
});