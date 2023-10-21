
function findFirstSelectedCheckbox(checkboxes) {
    return Array.from(checkboxes).find(
      checkbox => checkbox.checked,
    );
  }
  
 
  function findAllSelectedCheckboxes(checkboxes) {
    return Array.from(checkboxes).filter(
      checkbox => checkbox.checked,
    );
  }
  
  
  function atLeastOneCheckboxChecked(checkboxes) {
    return Array.from(checkboxes).some(
      checkbox => checkbox.checked,
    );
  }
  
  const form = document.getElementById('check');
  
  const checkboxes = document.querySelectorAll(
    'input[type="checkbox"]',
  );
  
  const validationMessage = document.getElementById(
    'validation-message',
  );

  form.addEventListener('submit', event => {
  
    if (!atLeastOneCheckboxChecked(checkboxes)) {
      console.log('None of the checkboxes are checked');
      event.preventDefault();
      validationMessage.style.color = '#a94442';
      validationMessage.style.marginLeft = '130px';
      validationMessage.style.backgroundColor = '#f2dede';
      validationMessage.style.padding = '3px';
      validationMessage.style.border = '1px solid #a94442';
      validationMessage.style.borderRadius = '5px';
      validationMessage.innerHTML ='Please check atleast one of the list!!';
      return;
    }
    console.log('At least one checkbox is checked');
    console.log(findFirstSelectedCheckbox(checkboxes));
    console.log(findAllSelectedCheckboxes(checkboxes));
    console.log(findAllSelectedCheckboxes(checkboxes).length);
  });
  