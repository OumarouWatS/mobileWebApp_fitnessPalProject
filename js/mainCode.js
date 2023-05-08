let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}


function nextSection() {
  var buttonNS = document.getElementById("btn");

  buttonNS.addEventListener("click", function() {
    var carouselSection = document.getElementById("carouselSection");
    carouselSection.scrollIntoView({ behavior: "smooth" });
  });
}


const progressBar = document.getElementById('progress-bar');
const stepsInput = document.getElementById('steps-input');
const submitBtn = document.getElementById('submit-btn');

submitBtn.addEventListener('click', () => {
    const dailySteps = parseInt(stepsInput.value);

    if (isNaN(dailySteps)) {
        alert('Please enter a valid number of steps.');
        return;
    }

    const totalSteps = 10000;
    const progressPercentage = (dailySteps / totalSteps) * 100;
    progressBar.style.width = `${progressPercentage}%`;
});

//Quiz
function checkAnswers() {
  const questions = ['q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10'];
  for (let i = 0; i < questions.length; i++) {
    if (!document.querySelector(`input[name="${questions[i]}"]:checked`)) {
      alert('Please answer all questions before submitting');
      return false;
    }
  }
  return true;
}

function calculateFitnessLevel() {
  if (!checkAnswers()) {
    return;
  }

  // Retrieve selected values for each question
  const q1Value = parseInt(document.querySelector('input[name="q1"]:checked').value);
  const q2Value = parseInt(document.querySelector('input[name="q2"]:checked').value);
  const q3Value = parseInt(document.querySelector('input[name="q3"]:checked').value);
  const q4Value = parseInt(document.querySelector('input[name="q4"]:checked').value);
  const q5Value = parseInt(document.querySelector('input[name="q5"]:checked').value);
  const q6Value = parseInt(document.querySelector('input[name="q6"]:checked').value);
  const q7Value = parseInt(document.querySelector('input[name="q7"]:checked').value);
  const q8Value = parseInt(document.querySelector('input[name="q8"]:checked').value);
  const q9Value = parseInt(document.querySelector('input[name="q9"]:checked').value);
  const q10Value = parseInt(document.querySelector('input[name="q10"]:checked').value);
  

  // Assign fitness level score based on selected values for each question
  const question1 = q1Value;
  const question2 = q2Value;
  const question3 = q3Value;
  const question4 = q4Value * 2; //Two Services fruit and Vegetables
  const question5 = q5Value;
  const question6 = q6Value;
  const question7 = q7Value;
  const question8 = q8Value;
  const question9 = q9Value;
  const question10 = q10Value;


const totalScore = question1 + question2 + question3 + question4 + question5 + question6 + question7 + question8 + question9 + question10; 
 
  let fitnessLevel = '';
  let imagen = ''; 
  if (totalScore >= 0 && totalScore <= 5) {
    fitnessLevel = 'Very Poor';
    document.getElementById('result').innerHTML = 'Your fitness level is: ' + fitnessLevel + '<img class = "quizImage" src="https://qph.cf2.quoracdn.net/main-qimg-a8833dfad23ec12618073a47f9b42d13.webp" alt="Excellent">';
  } else if (totalScore > 5 && totalScore <= 10) {
    fitnessLevel = 'Poor';
    document.getElementById('result').innerHTML = 'Your fitness level is: ' + fitnessLevel + '<img class = "quizImage" src="https://health.clevelandclinic.org/wp-content/uploads/sites/3/2018/10/OverExercising-748340061-770x533-1-650x428.jpg" alt="Excellent">';
  } else if (totalScore > 10 && totalScore <= 15) {
    fitnessLevel = 'Below Average';
    document.getElementById('result').innerHTML = 'Your fitness level is: ' + fitnessLevel + '<img class = "quizImage" src="https://health.clevelandclinic.org/wp-content/uploads/sites/3/2018/10/OverExercising-748340061-770x533-1-650x428.jpg" alt="Excellent">';
  } else if (totalScore > 15 && totalScore <= 20) {
    fitnessLevel = 'Average';
    document.getElementById('result').innerHTML = 'Your fitness level is: ' + fitnessLevel + '<img class = "quizImage" src="https://townsquare.media/site/34/files/2012/04/137420405.jpg?w=980&q=75" alt="Excellent">';
  } else if (totalScore > 20 && totalScore <= 25) {
    fitnessLevel = 'Above Average';
    document.getElementById('result').innerHTML = 'Your fitness level is: ' + fitnessLevel + '<img class = "quizImage" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMGF03nGi6v9RVasMWTJtdGpe71ed5OEintw&usqp=CAU" alt="Excellent">';
  } else if (totalScore > 25 && totalScore <= 30) {
    fitnessLevel = 'Good';
    document.getElementById('result').innerHTML = 'Your fitness level is: ' + fitnessLevel + '<img class = "quizImage" src="https://i0.wp.com/shop.truefitness.com/wp-content/uploads/sites/2/2020/03/Hire-A-Trainer-To-Reach-Your-Goals-True-Fitness.jpg?resize=1024%2C722&ssl=1" alt="Excellent">';
  } else if (totalScore > 30 && totalScore <= 35) {
    fitnessLevel = 'Very Good';
    document.getElementById('result').innerHTML = 'Your fitness level is: ' + fitnessLevel + '<img class = "quizImage" src="https://www.verywellfit.com/thmb/yHMw_en0CTeoFkqZW5yZUOnYfWg=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/3120397-GettyImages-1370779226-73bc1d94e66f4048942f1d1d9639494f.jpg" alt="Excellent">';
  } else if (totalScore > 35 && totalScore <= 50) {
    fitnessLevel = 'Excellent';
    document.getElementById('result').innerHTML = 'Your fitness level is: ' + fitnessLevel + '<img class = "quizImage" src="https://images.bizbuysell.com/shared/listings/199/1993089/e0300294-9635-459a-992f-d0702194e100-W768.jpg" alt="Excellent">';

  }   
  document.getElementById('next').click(); 

}












