# async-lucid-cep-job
API  that use lucid architecture to search a data in another API using a async job

The async is doesn't work in this way: Controller -> Feature -> queueJob;

- try to use this URI -> localhost:8000/api/cep/01001000

- the queueJob only worked for me, using the redis and predis instaled on project, before this no one queueJob were really queue.

- If you is calling queujob using the construct... in this case the construct doesn't call the handle, so you have to call it
