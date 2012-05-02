window.addEvent('domready', function()
{
  //read the currentToggler from the cookie. if it doesn't exist, defaults to 0
  var currentToggler = $pick(Cookie.read('currentToggler'),0),
  togglers = $$('.toggler'),
  elements = $$('.element'),
  myAccordion = new Fx.Accordion(togglers, elements,
  {
    display: currentToggler,
    initialDisplayFx: false,
    onActive: function(toggler, element)
    {
      toggler.setStyles(
      {
	background: '#BEC0C2',
        color: '#FFF'
      });
    },
    onBackground: function(toggler, element)
    {
      toggler.setStyles(
      {
	background: '#FFF',
        color: '#000'
      });
      element.setStyles({border: '0px'});
    }
  });
});

/* For setting current articles from outside links */
function lbArticle(idNum)
{
        Cookie.write('currentToggler',idNum,{duration: 0.000058});
};

