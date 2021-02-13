$.post(
    'https://graph.facebook.com',
    {
        id: 'https://targowisko.org/843,garazmagazyn-do-wynajecia-ulmurarska',
        scrape: true
    },
    function(response){
        console.log(response);
    }
);
//the script refreshes the added photo if it does not show up on the fanpage
