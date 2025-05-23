const start_btn = document.querySelector(".start_btn button");
const info_box = document.querySelector(".info_box");
const exit_btn = info_box.querySelector(".buttons .quit");
const continue_btn = info_box.querySelector(".buttons .restart");
const border_box = document.querySelector(".border-box");
const timeCount = border_box.querySelector(".timer .timer_sec");
const timeline = border_box.querySelector("header .time_line");
const timeText = document.querySelector(".timer .time_left_txt");
const timeoff = document.querySelector(".timer .tiem_text");

const option_list = document.querySelector(".option_list");

//if start quiz button clicked  activeInfo
start_btn.onclick = () => {
    info_box.classList.add("activeInfo"); //show the info box
};

//if exit button clicked
exit_btn.onclick = () => {
    info_box.classList.remove("activeInfo"); //hide the info box
};

//if exit button clicked
continue_btn.onclick = () => {
    info_box.classList.remove("activeInfo"); //hide the info box
    border_box.classList.add("activeborder"); //hide the info box
    showQuestion(0);
    queCounter(1);
    startTimer(15);
    startTimerLine(0);
};
let que_count = 0;
let que_numb = 1;
let counter;
let counterLine;
let timeValue = 15;
let widthValue = 0;
let userScore = 0;

const next_btn = border_box.querySelector(".next_btn");
const result_box = document.querySelector(".result_box");
const restart_quiz = result_box.querySelector(".buttons .restart");
const quit_quiz = result_box.querySelector(".buttons .quit");

// if quitQuiz button clicked
quit_quiz.onclick = () => {
    window.location.reload(); //reload the current window
};

//if next button clicked/////////////////////---------------------------------------------------------------------
next_btn.onclick = () => {
    if (que_count < questions.length - 1) {
        //if question count is less than total question length
        que_count++;
        que_numb++;
        showQuestion(que_count); //calling showQestions function
        queCounter(que_numb);
        clearInterval(counter);
        startTimer(timeValue);
        clearInterval(counterline);
        startTimerLine(widthValue);
        next_btn.style.display = "none";
        timeoff.textContent = "Temp restant";
    } else {
        clearInterval(counter);
        clearInterval(counterline);
        console.log("Questions completed");
        showResultBox();
    }
};
//------------------------------------------------------------------------------------------------------------------
function showQuestion(file) {
    const que_text = document.querySelector(".que_text");

    let que_tag =
        "<span>" +
        questions[file].numb +
        "." +
        questions[file].question +
        "</span>";
    let option_tag =
        '<div class="option">' +
        questions[file].option[0] +
        "<span></span></div>" +
        '<div class="option"> ' +
        questions[file].option[1] +
        "<span></span></div>" +
        '<div class="option">' +
        questions[file].option[2] +
        "<span></span></div>" +
        '<div class="option">' +
        questions[file].option[3] +
        "<span></span></div>";

    que_text.innerHTML = que_tag;
    option_list.innerHTML = option_tag;

    const option = option_list.querySelectorAll(".option");
    for (let i = 0; i < option.length; i++) {
        option[i].setAttribute("onclick", "optionSelcted(this)");
    }
}

let tickicon = ' <div class="icon tick"><i class="fas fa-check"></i></div>';
let crossicon = '<div class="icon cross"><i class="fas fa-times"></i></div>';

function optionSelcted(answer) {
    clearInterval(counter);
    clearInterval(counterline);
    let userAns = answer.textContent;
    let correctAns = questions[que_count].answer;
    let allOption = option_list.children.length;
    if (userAns == correctAns) {
        userScore += 1;
        console.log(userScore);
        answer.classList.add("correct");
        console.log("Answer is correct");
        answer.insertAdjacentHTML("beforeend", tickicon);
    } else {
        answer.classList.add("incorrect");
        console.log("Answer is wrong");
        answer.insertAdjacentHTML("beforeend", crossicon);
        //if answers incorrect then automatically selected the correct answer

        for (let i = 0; i < allOption; i++) {
            if (option_list.children[i].textContent == correctAns) {
                option_list.children[i].setAttribute("class", "option correct");
                option_list.children[i].insertAdjacentHTML(
                    "beforeend",
                    tickicon
                );
            }
        }
    }

    //once user selected disabled all options
    for (let i = 0; i < allOption; i++) {
        option_list.children[i].classList.add("disabled");
    }
    next_btn.style.display = "block";
}

function showResultBox() {
    info_box.classList.remove("activeInfo"); //hide the info box
    border_box.classList.remove("activeborder"); //hide the info box
    result_box.classList.add("activeResult");
    const scoreText = result_box.querySelector(".score_text");
    if (userScore > 6) {
        let scoretag =
            '<span style="margin-left:76px">Félicitation, vous avez  <p style="color:#2E0249;">' +
            userScore +
            '</p> parmi  <p style="color:#FD8C04;">' +
            questions.length +
            ".</p></span>";
        scoreText.innerHTML = scoretag;
    } else if (userScore > 1) {
        let scoretag =
            '<span style="margin-left:76px">Bien, vous avez  <p style="color:#2E0249;">' +
            userScore +
            '</p> parmi   <p style="color:#2E0249;">' +
            questions.length +
            ".</p></span>";
        scoreText.innerHTML = scoretag;
    } else {
        let scoretag =
            '<span style="margin-left:76px">Désole, vous avez sauf <p style="color:#2E0249;">' +
            userScore +
            '</p> parmi   <p style="color:#2E0249;">' +
            questions.length +
            ".</p></span>";
        scoreText.innerHTML = scoretag;
    }
}

function startTimer(time) {
    counter = setInterval(timer, 1000);
    function timer() {
        timeCount.textContent = time;
        time--;
        if (time < 9) {
            let addZero = timeCount.textContent;
            timeCount.textContent = "0" + addZero;
        }
        if (time < 0) {
            clearInterval(counter);
            timeCount.textContent = "00";
            timeoff.textContent = "Temps terminé";
            const allOptions = option_list.children.length; //getting all option items
            let correcAns = questions[que_count].answer; //getting correct answer from array
            for (i = 0; i < allOptions; i++) {
                if (option_list.children[i].textContent == correcAns) {
                    //if there is an option which is matched to an array answer
                    option_list.children[i].setAttribute(
                        "class",
                        "option correct"
                    ); //adding green color to matched option
                    option_list.children[i].insertAdjacentHTML(
                        "beforeend",
                        tickicon
                    ); //adding tick icon to matched option
                    console.log("Time Off: Auto selected correct answer.");
                }
            }
            for (i = 0; i < allOptions; i++) {
                option_list.children[i].classList.add("disabled"); //once user select an option then disabled all options
            }
            next_btn.style.display = "block"; //show the next button if user selected any option
        }
    }
}

function startTimerLine(time) {
    counterline = setInterval(timer, 29);
    function timer() {
        time += 1;
        timeline.style.width = time + "px";
        if (time > 549) {
            clearInterval(counterline);
        }
    }
}

function queCounter(file) {
    const bottom_ques_counter = border_box.querySelector(".total_que");
    let totalQuesCountTag =
        "<span><p>" +
        file +
        "</p>in<p>" +
        questions.length +
        "</p>quistions</span>";
    bottom_ques_counter.innerHTML = totalQuesCountTag;
}
