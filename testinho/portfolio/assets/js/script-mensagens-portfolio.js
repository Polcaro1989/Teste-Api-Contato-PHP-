
document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function() {
      Toastify({
        text: 'Meu portfólio.',
        gravity: 'top', 
        duration: 5000, 
        className: 'custom-toast',
        backgroundColor: 'blue', 
      }).showToast();
    }, 5000); 
  });

    document.addEventListener('DOMContentLoaded', function() {
      setInterval(function() {
        Toastify({
          text: 'Aqui eu apresento meus trabalhos, ao longo dos meus estudos..',
          gravity: 'bottom',
          duration: 5000,
          className: 'custom-toast-green',
          backgroundColor: 'green', 
        }).showToast();
      }, 50000); 
    });
