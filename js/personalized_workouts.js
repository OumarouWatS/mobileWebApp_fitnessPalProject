function recommendWorkout() {

    var fitnessLevel = document.getElementById("fitness-level").value;
    var goal = document.getElementById("goal").value;
    var equipment = document.getElementById("equipment").value;
    var time = document.getElementById("time").value;
    var limitations = document.getElementById("limitations").value;

    // Define workout options
    var workoutOptions = [
        {
            name: "Bodyweight workout",
            description: "10 push-ups, 10 squats, 10 lunges (each leg), 10 crunches. Repeat for 3 rounds.",
            fitnessLevels: ["beginner", "intermediate"],
            goals: ["weight-loss"],
            equipment: ["none"],
            duration: 30,
            limitations: ["back-pain"]
        },
        {
            name: "Dumbbell workout",
            description: "10 dumbbell rows, 10 dumbbell squats, 10 dumbbell lunges (each leg), 10 dumbbell curls. Repeat for 3 rounds.",
            fitnessLevels: ["beginner", "intermediate"],
            goals: ["muscle-gain"],
            equipment: ["dumbbells"],
            duration: 45,
            limitations: ["shoulder-pain"]
        },
        {
            name: "Kettlebell workout",
            description: "10 kettlebell swings, 10 goblet squats, 10 kettlebell lunges (each leg), 10 kettlebell presses. Repeat for 3 rounds.",
            fitnessLevels: ["intermediate", "advanced"],
            goals: ["muscle-gain", "endurance"],
            equipment: ["kettlebell"],
            duration: 60,
            limitations: ["arm-pain"]
        },
        {
            name: "Barbell workout",
            description: "10 barbell deadlifts, 10 barbell squats, 10 barbell lunges (each leg), 10 barbell bench presses. Repeat for 3 rounds.",
            fitnessLevels: ["advanced"],
            goals: ["muscle-gain"],
            equipment: ["barbell"],
            duration: 75,
            limitations: ["knee-pain"]
        },
        {
            name: "Resistance band workout",
            description: "10 resistance band rows, 10 resistance band squats, 10 resistance band lunges (each leg), 10 resistance band curls. Repeat for 3 rounds.",
            fitnessLevels: ["beginner", "intermediate"],
            goals: ["muscle-gain"],
            equipment: ["resistance-bands"],
            duration: 90,
            limitations: []
        }
    ];

    // Filter workout options based on user input adapted from https://stackoverflow.com/questions/72700973/difficulty-filtering-cards-based-on-input-select-value
    let filteredWorkoutOptions = workoutOptions.filter(workout => {
    let limitationsMatch = true;
    if (limitations) {
        limitationsMatch = workout.limitations.every(limitation => limitations.includes(limitation));
    }
    return workout.fitnessLevels.includes(fitnessLevel) &&
        workout.goals.includes(goal) &&
        workout.equipment.includes(equipment) &&
        workout.duration <= time &&
        limitationsMatch;
});


    // Choose a random workout from the filtered options
    let workoutRecommendation = "";
    if (filteredWorkoutOptions.length > 0) {
        var randomIndex = Math.floor(Math.random() * filteredWorkoutOptions.length);
        var recommendedWorkout = filteredWorkoutOptions[randomIndex];
        workoutRecommendation = recommendedWorkout.name + ": " + recommendedWorkout.description;
    } else {
        workoutRecommendation = "Sorry, We could not find a workout with your criteria, We are working on improving our system...";
    }

    // Display workout recommendation
    var workoutRecommendationElement = document.getElementById("workout-recommendation");
    workoutRecommendationElement.innerHTML = "<p>" + workoutRecommendation + "</p>";
}
