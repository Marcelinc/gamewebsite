$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    

    $('#dane').click(function(){

        
        $.ajax({url: '/daneCreate',success: function(result){
            if(result == '')
                $('#info').html('<h1>Nie wprowadziłeś jeszcze danych</h1><a href="/dane">Możesz zrobić to teraz</a>');
            else
            {
                $('#info').html(result).append('<a href="/daneEdit">Edytuj</a>');
            }    
        }});
    })
    
    $('#stats').click(function(){
        $('#info').html('<h1>Twoje statystyki</h1><p>Liczba bitew: 7435</p><p>Średni poziom: 8,4</p><p>Średnie uszkodzenia: 2467</p><p>Średnie zniszczenia: 2</p>'); })

    
    
});



