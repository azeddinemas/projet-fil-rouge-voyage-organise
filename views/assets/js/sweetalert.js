    // document.querySelectorAll('.btn-outline-danger').forEach((btn) => {
    //     btn.addEventListener('click', (e) => {
    //         e.preventDefault();
    //         Swal.fire({
    //             icon: 'warning',
    //             title: 'Do you want to delete this row?',
    //             showDenyButton: true,
    //             showCancelButton: true,
    //             confirmButtonText: 'Yes, delete it!',
    //         }).then((result) => {
    //             /* Read more about isConfirmed, isDenied below */
    //             if (result.isConfirmed) {
    //                 window.location.href = e.target.href;
    //             }
    //         })
    //     })

    // })
    document.querySelectorAll('.btn-outline-danger').forEach((btn) => {
        btn.addEventListener('click', (e) => {
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
                    window.location.href = e.target.href;
                }
            })
        })

    })