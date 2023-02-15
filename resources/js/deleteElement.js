const deleteElements = document.querySelectorAll('form.delete-popup');

deleteElements.forEach((element) => {
    element.addEventListener('submit', function(event) {
        event.preventDefault();
        const elementName = element.getAttribute('data-element-name');
        const confirm = window.confirm('are you sure you want to delete ' + elementName + 'element? This operation is irreversible!');
        if(confirm) this.submit();
    })
})