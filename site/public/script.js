var tabButtons = document.querySelectorAll(".tabContainer .buttonContainer button");
var tabPanels = document.querySelectorAll(".tabContainer .tabPanel");

function showPanel(panelIndex, colorCode) {
  tabButtons.forEach(function(node) {
    node.style.backgroundColor = "";
    node.style.color = "";
  });
  tabButtons[panelIndex].style.backgroundColor = colorCode;
  tabButtons[panelIndex].style.color = "white";
  tabPanels.forEach(function(node) {
    node.style.display = "none";
  });
  tabPanels[panelIndex].style.display = "block";
  tabPanels[panelIndex].style.backgroundColor = colorCode;

}

showPanel(0,'#a66767');

const faders = document.querySelectorAll(".fade-in");
const appearOptions = {
  threshold: 0,
  rootMargin: "0px 0px -100px 0px"
};
const appearOnScroll = new IntersectionObserver(function(entries,appearOnScroll) {
  entries.forEach(entry => {
    if(!entry.isIntersecting){
      return;
    }
    else{
      entry.target.classList.add("appear");
      appearOnScroll.unobserve(entry.target);
    }
  })
},
appearOptions);
faders.forEach(fader => {
  appearOnScroll.observe(fader);
})
