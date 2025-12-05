document.addEventListener('DOMContentLoaded', function () {
    const downloadSelect = document.getElementById('genesisguides');//select element
    const downloadButton = document.getElementById('downloadbutton');//anchor surrounding download button, href will be changed based on selection

    downloadSelect.addEventListener('change', function () {
        const selected = downloadSelect.options[downloadSelect.selectedIndex];//java script can be quite cool. This gets the selected option element
        //I referenced this which is how I found out selectedIndex was a thing https://stackoverflow.com/questions/368219/javascript-onchange-within-option
        const optionHref = selected.getAttribute('href');//get that href
        downloadButton.setAttribute('href', optionHref);//shove it in the download button anchor
    })
});