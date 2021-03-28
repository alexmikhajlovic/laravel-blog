require('./bootstrap');
import Swal from 'sweetalert2/src/sweetalert2.js';

let forms = document.getElementsByClassName("form-delete");

console.log(forms);

for( let i = 0; i < forms.length; i++ ) {

    forms[i].addEventListener('submit',function(e) {

        e.preventDefault();
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.'
                    // 'success'
                );
                forms[i].submit();
            }
        })
    });

};