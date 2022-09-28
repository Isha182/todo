
var todoList;
var todoSubmit;
var checkbox;
let nTaskCount = 0;

let taskDetails = document.getElementById('todoInput');
const submit = document.getElementById('InputSubmit');


submit.addEventListener('click', () => {

    if (taskDetails.value === "") {
        alert("Enter details");
    }
    else{
        nTaskCount++;
        var checkbox = document.createElement('input');
        checkbox.type = "checkbox";
        checkbox.name = "name";
        checkbox.value = "value";
         checkbox.id = `checkBox_${nTaskCount}`;
        div2.appendChild(checkbox)
        document.body.appendChild(div2);
        checkbox.style = "margin-left:10px"
    
        todoList = document.createElement('input');
        todoList.type = "text";
        let number = "number";
        todoList.value = document.getElementById("todoInput").value
        todoList.id = `${todoList}_${nTaskCount}`;
        div2.appendChild(todoList)
        document.body.appendChild(div2);
        todoList.style = "border: 1px solid blue; width: 200px; margin:10px; color:black;"
    
    
        let eButton = "sButton";
        todoEdit = document.createElement('button');
        todoEdit.type = "button";
        todoEdit.innerHTML = "Edit";
        todoEdit.id = `${todoEdit}_${nTaskCount}`;
        div2.appendChild(todoEdit);
        document.body.appendChild(div2);
        todoEdit.style = "margin-right:10px;  background: #34495e; color:white; border:none"

        let dButton = "sButton";
        todoDelete = document.createElement('button');
        todoDelete.type = "button";
        todoDelete.innerHTML = "Delete";
        todoDelete.id =`${todoDelete}_${nTaskCount}`;
        div2.appendChild(todoDelete);
        document.body.appendChild(div2);
        todoDelete.style = "margin-right:10px;  background: #34495e; color:white;  border:none"
    
        var br = document.createElement("br");
        div2.appendChild(br);
    }

        // checkbox.addEventListener('change', () =>{
        //             if(this.checkbox){

        //             }
        // })

})

function currentTime() {
    const timeDisplay = document.getElementById("div5");
    const timeString = new Date().toLocaleTimeString();
    timeDisplay.textContent = timeString;
}
setInterval(currentTime, 1000);




