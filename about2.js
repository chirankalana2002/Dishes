// get elements
const noteBox = document.getElementById("noteBox");
const saveBtn = document.getElementById("saveBtn");
const resetBtn = document.getElementById("resetBtn");

// load saved note when page opens
window.addEventListener("load", function () {
    const savedNote = localStorage.getItem("chickenNote");
    if (savedNote) {
        noteBox.value = savedNote;
    }
});

// save note
saveBtn.addEventListener("click", function () {
    const note = noteBox.value;
    localStorage.setItem("chickenNote", note);
    alert("Note saved successfully!");
});

// reset note
resetBtn.addEventListener("click", function () {
    noteBox.value = "";
    localStorage.removeItem("chickenNote");
    alert("Note cleared!");
});