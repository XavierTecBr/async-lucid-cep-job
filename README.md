# async-lucid-cep-job

THIS REPOSITORY IS ONLY TO EXPLORE A FRIEND DOUBT - IT WILL BE REMOVED

API  that use lucid architecture to search a data in another API using a async job

The async doesn't work in this way: CepController -> CepFeature -> CepJob;

- Use a REst client and try to get this URI -> localhost:8000/api/cep/01001000 and see the log in storage folder

-.env the field QUEUE_CONNECTION=redis to use the redis to save the queue workers

- the queueJob need the artisan and queue:work to work fine

- remember any alteration in the code you need to restart the queue and put it on work again
