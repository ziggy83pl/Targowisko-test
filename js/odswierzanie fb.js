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