While installing the project if you see an error message like 
    
    'creation of dynamic property ci_uri'

something like this then go to the menioned file, navigate to the top of that class and paste the bellow lines 

    #[\AllowDynamicProperties]

Do this process for all the files showing the error and your project will start runnung on the browser 

