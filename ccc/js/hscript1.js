const quizDB = [
    {
        question: "Q1:लिब्रे ऑफिस कैल्क में स्प्रेडशीट के लिए डिफ़ॉल्ट फाइल एक्सटेंशन क्या है?",
        a: ".odp",
        b: ".ods ",
        c: ".odd ",
        d: ".odt ",
        ans: "ans2"
    },
    {
        question: "Q2:लिब्रे ऑफिस कैल्क में, सूत्र हमेशा एक प्रतीक से शुरू होता है?",
        a: "%",
        b: "$",
        c: "=",
        d: "^",
        ans: "ans3"
    },
    {
        question: "Q3:लिब्रे ऑफिस कैल्क में सेल रेफरेंस कितने प्रकार के होते हैं?",
        a: "1",
        b: "2",
        c: "3",
        d: "4",
        ans: "ans2"
    },
    {
        question: "Q4:लिब्रेऑफ़िस में फाइंड एंड रिप्लेस का विकल्प किस मेनू में है?",
        a: "File",
        b: "Edit",
        c: "View",
        d: "Sheet",
        ans: "ans2"
    },
    {
        question: "Q5:लिब्रेऑफ़िस कैल्क में अधिकतम कितनी पंक्तियाँ और स्तंभ हैं?",
        a: "1048576 or 1024   ",
        b: "1048576 or 16384",
        c: "1048570 or 1024   ",
        d: "None of the above",
        ans: "ans1"
    },
    {
        question: "Q6:एक लिब्रेऑफ़िस कैल्क के पास अधिकतम कितनी वर्कशीट हो सकती है?",
        a: "10",
        b: "100",
        c: "1000",
        d: "10000",
        ans: "ans4"
    },
    {
        question: "Q7:लिब्रेऑफ़िस कैल्क की सेल के अंदर एक नई लाइन या पैराग्राफ बनाने के लिए ctrl के साथ। किस कुंजी का उपयोग किया जाता है?",
        a: "Shift",
        b: "Alt",
        c: "Tab",
        d: "Enter",
        ans: "ans4"
    },
    {
        question: "Q8:सूत्र MAX(B1:B3)+MIN(B1:B3) का परिणाम क्या है? जहां B1=5,B2=2,B3=7",
        a: "7, 2",
        b: "7+2",
        c: "9",
        d: "5, 7",
        ans: "ans3"
    },
    {
        question: "Q9:फॉर्मूला = CONCATENATE ('CCC ', 'Rahul as Authors') सूत्र का परिणाम क्या है?",
        a: "CCC",
        b: "CCC Rahul",
        c: "CCC Rahul as Authors",
        d: "उपर्युक्त सभी",
        ans: "ans3"
    },
    {
        question: "Q10:सूत्र का परिणाम क्या है = if(C2>20; 'YES','NO') जहां C2=5.",
        a: "YES",
        b: "NO",
        c: "yes",
        d: "इनमें से कोई नहीं",
        ans: "ans2"
    },
    
];

const question = document.querySelector('.question');
const option1 = document.querySelector('#option1');
const option2 = document.querySelector('#option2');
const option3 = document.querySelector('#option3');
const option4 = document.querySelector('#option4');
const submit= document.querySelector('#submit');

const answers = document.querySelectorAll('.answer');

const showScore= document.querySelector('#showscore');
let questionCount = 0;
let score = 0;

const loadQuestion = () => {
    const questionList = quizDB[questionCount];
    question.innerText=(questionList.question);
    option1.innerText=(questionList.a);
    option2.innerText=(questionList.b);
    option3.innerText=(questionList.c);
    option4.innerText=(questionList.d);
}

loadQuestion();

const getCheckAnswer = () =>{
    let answer;
    answers.forEach((curAnsElem) => {
        if(curAnsElem.checked){
            answer = curAnsElem.id;
        }
       
    });
    return answer;

};

const deselectAll = () => {
    answers.forEach((curAnsElem) => curAnsElem.checked= false);
}

submit.addEventListener ('click',() => {
    const checkedAnswer = getCheckAnswer();
    console.log(checkedAnswer);
    if(checkedAnswer == quizDB[questionCount].ans){
        score++;
    };
        questionCount++;
        deselectAll();
    if(questionCount< quizDB.length){
        loadQuestion();
    }else{
        showScore.innerHTML = `
        <h3>आपने स्कोर किया ${score}/${quizDB.length} </h3> 
        <button class= "btn1" onclick = "location.reload()"> दोबारा खेलें</button>
        `;
        showScore.classList.remove('scoreA');
    }
})