const pharagraph = document.getElementById("pharagraph");
const headers = pharagraph.querySelectorAll("h2, h3, h4");

slugify = function (text) {
    let trMap = {
        çÇ: "c",
        ğĞ: "g",
        şŞ: "s",
        üÜ: "u",
        ıİ: "i",
        öÖ: "o",
    };
    for (let key in trMap) {
        text = text.replace(new RegExp("[" + key + "]", "g"), trMap[key]);
    }
    return text
        .replace(/[^-a-zA-Z0-9\s]+/gi, "") // remove non-alphanumeric chars
        .replace(/\s/gi, "-") // convert spaces to dashes
        .replace(/[-]+/gi, "-") // trim repeated dashes
        .toLowerCase();
};

document.addEventListener("DOMContentLoaded", function () {
    Array.from(headers).forEach((header, index) => {
        header.setAttribute("id", slugify(header.innerText));
    });
    tocbot.init({
        // Where to render the table of contents.
        tocSelector: ".table-of-contents",
        // Where to grab the headings to build the table of contents.
        contentSelector: ".ck-editor__editable",
        // Which headings to grab inside of the contentSelector element.
        headingSelector: "h2, h3, h4",
        // For headings inside relative or absolute positioned containers within content.
        hasInnerContainers: true,
        headingsOffset: 40,
        scrollSmoothOffset: -80,
    });
});
