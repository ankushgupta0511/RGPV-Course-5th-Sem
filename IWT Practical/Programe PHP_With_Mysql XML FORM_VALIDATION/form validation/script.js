let btn1 = document.querySelector("#btn1");
/*btn1.onclick = () => {
    console.log("btn1 was clicked");
    let a=25;
    a++;
    console.log(a);

}
let div= document.querySelector("div");
div.onmouseover = () => {
    console.log("You are inside div");
};*/

//EVENT OBJECT CODE
/*btn1.onclick = (evt) => {
    console.log(evt);
    console.log(evt.type);
    console.log(evt.target);
    console.log(evt.clientX, evt.clientY);
};
let div= document.querySelector("div");
div.onmouseover = (evt) => {
    console.log(evt);
    console.log(evt.type);
    console.log(evt.target);
    console.log(evt.clientX, evt.clientY);
};*/

// Event Listener code
/*btn1.addEventListener("click", () => {
    console.log("button1 was clicked");
});
btn1.addEventListener("click", () => {
    console.log("button2 was clicked");
});*/
// WE CAN ACCESS EVENT OBJECT IN EVENT LISTNER CODE
/*btn1.addEventListener("click", (evt) => {
    console.log("Button1 was clicked");
    console.log(evt);
    console.log(evt.type);
    console.log(evt.target);
})*/

/*btn1.addEventListener("click", () => {
    console.log("button1 was clicked - handler1 ")
});
btn1.addEventListener("click", () => {
    console.log("button1 was clicked - handler2 ")
});
btn1.addEventListener("click", () => {
    console.log("button1 was clicked - handler3 ")
});
btn1.addEventListener("click", () => {
    console.log("button1 was clicked - handler4 ")
});
btn1.removeEventListener("click", () => {
    console.log("button1 was clicked - handler3 ")
});*/
//WE CANNOT REMOVE HANDLER USING THIS METHOD EVEN THOUGH NAMES ARE SAMR
// BECAUSE BOTH FUNCTIONS WILL STORE AT DIFFERENT LOCATIONS
//TO REMOVE FUNCTION USING EVENT LISTENER, WE USE *CALLBACK REFERENCE" AND IT SHOULD BE SAME TO REMOVE
//code to remove function 
btn1.addEventListener("click", () => {
    console.log("button1 was clicked - handler1 ")
});
btn1.addEventListener("click", () => {
    console.log("button1 was clicked - handler2 ")
});
const handler3 = () => {
    console.log("button1 was clicked - handler3 ");
};
btn1.addEventListener("click", handler3);
btn1.addEventListener("click", () => {
    console.log("button1 was clicked - handler4 ")
});
btn1.removeEventListener("click", handler3);

