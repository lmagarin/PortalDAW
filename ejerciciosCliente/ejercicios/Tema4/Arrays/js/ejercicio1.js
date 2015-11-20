function inicio(){
    var styles = ["Jazz", "Blues"];
    styles.push("Rock'n'Roll");
    styles[1] = "Classic";
    console.log(styles);
    lastStyle = styles[styles.length-1];
    console.log(lastStyle);
}

window.addEventListener("load", inicio);