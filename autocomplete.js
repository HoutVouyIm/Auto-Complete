let availableKeywords = [
    'HTML',
    'CSS',
    'Easy tutorials',
    'Web design tutorials',
    'JavaScript',
    'Where to learn coding online',
    'Where to learn web design',
    'How to create a website',
];

const resultBox = document.querySelector(".result-box");
const inputBox = document.getElementById("input-box");

inputBox.onkeyup = function(){
    let result = [];
    let input = inputBox.value;

    if(input.length){
        result = availableKeywords.filter((keyword)=>{
           return  keyword.toLowerCase().includes(input.toLowerCase());
        });
    }
    display(result);

    if(!result.length){
        resultBox.innerHTML = "";
    }
}

function display(result){
    const content = result.map((list)=>{
        return "<li onclick=selectInput(this)>"+ list + "</li>";
    });

    resultBox.innerHTML = "<ul>" + content.join('') + "</ul>";
}

function selectInput(list){
    inputBox.value = list.innerHTML;
    resultBox.innerHTML = '';
}