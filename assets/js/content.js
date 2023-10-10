let about_section = document.getElementById("about-section");
let mission = document.getElementById("mission");
let vision = document.getElementById("vision");
let next_plan = document.getElementById("next-plan");

function changeToMission(){
  mission.classList.add('active');
  vision.classList.remove('active');
  next_plan.classList.remove('active');
  about_section.textContent = "These donations act as a lifeline, offering a chance for recipients to break the cycle of poverty, access education and vocational training, and ultimately build a better future for themselves and their families.";
}

function changeToNextPlan() {
  mission.classList.remove('active');
  vision.classList.remove('active');
  next_plan.classList.add('active');
  about_section.textContent = "Our next plan involves enhancing user engagement through personalized donation suggestions and expanding partnerships with diverse nonprofits. We aim to optimize transparency, ensuring donors witness the direct influence of their contributions on the causes they care about.";
}

function changeToVision(){
    mission.classList.remove('active');
    vision.classList.add('active');
    next_plan.classList.remove('active');
    about_section.textContent = "Empowering global compassion, our charity donation platform envisions a world where every act of giving creates a meaningful impact, uniting individuals and organizations to drive positive change in the lives of those in need."
  }

  changeToMission();