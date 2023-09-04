# How it works

I have tried to set this up as simply as possible, so i'll go through the request lifecycle, which should explain how this works.

## The Request Lifecycle
When a URI is requested (e.g. Truthliesandwork.com/about), the following happens:
- If it is a static page (i.e. does not require any data from the database), it is served from the `resources/views/pages` folder.
- In the service provider `FolioServiceProvider`, the `boot` method is called. This method isolates the domain name without a suffix (i.e. 'TruthLiesandWork') and sets the directory to retrieve the view from
  - e.g. if the domain is 'TruthLiesandWork.com', the directory is set to 'truthliesandwork' (the helper )