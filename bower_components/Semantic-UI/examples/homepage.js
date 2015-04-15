/*
 ____              ____  _ _____                                   _     
/ ___| _   _ _ __ |  _ \(_)___ / _   _  __ _ _ __  ___ _   _  __ _| |__  
\___ \| | | | '_ \| | | | | |_ \| | | |/ _` | '_ \/ __| | | |/ _` | '_ \ 
 ___) | |_| | | | | |_| | |___) | |_| | (_| | | | \__ \ |_| | (_| | | | |
|____/ \__,_|_| |_|____/|_|____/ \__, |\__,_|_| |_|___/\__, |\__,_|_| |_|
                                 |___/                 |___/             

|--------------------------------------------------------------------------
|            IMPORTANT! JavaScript has been doing a lot of change
|--------------------------------------------------------------------------
                                                                         */
$(document)
  .ready(function() {

    var
      changeSides = function() {
        $('.ui.shape')
          .eq(0)
            .shape('flip over')
            .end()
          .eq(1)
            .shape('flip over')
            .end()
          .eq(2)
            .shape('flip back')
            .end()
          .eq(3)
            .shape('flip back')
            .end()
        ;
      },
      validationRules = {
        firstName: {
          identifier  : 'email',
          rules: [
            {
              type   : 'empty',
              prompt : 'Please enter an e-mail'
            },
            {
              type   : 'email',
              prompt : 'Please enter a valid e-mail'
            }
          ]
        }
      }
    ;

    $('.ui.dropdown')
      .dropdown({
        on: 'click'
      })
    ;

    $('.ui.form')
      .form(validationRules, {
        on: 'blur'
      })
    ;

    $('.header.popup')
      .popup({
        position : 'top center'
      })
    ;

    $('.ui.accordion')
      .accordion()
    ;

    $('.masthead .information')
      .transition('scale in', 3000)
    ;

    setInterval(changeSides, 3000);

  })
;