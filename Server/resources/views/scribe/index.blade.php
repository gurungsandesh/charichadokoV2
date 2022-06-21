<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-3.30.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-3.30.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                                                                            <ul id="tocify-header-0" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="introduction">
                        <a href="#introduction">Introduction</a>
                    </li>
                                            
                                                                    </ul>
                                                <ul id="tocify-header-1" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="authenticating-requests">
                        <a href="#authenticating-requests">Authenticating requests</a>
                    </li>
                                            
                                                </ul>
                    
                    <ul id="tocify-header-2" class="tocify-header">
                <li class="tocify-item level-1" data-unique="category-details">
                    <a href="#category-details">Category Details</a>
                </li>
                                    <ul id="tocify-subheader-category-details" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="category-details-POSTapi-v1-category">
                        <a href="#category-details-POSTapi-v1-category">Insert new category</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="category-details-GETapi-v1-category--id-">
                        <a href="#category-details-GETapi-v1-category--id-">Display specified category</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="category-details-GETapi-v1-category">
                        <a href="#category-details-GETapi-v1-category">Display all categories
List all available categories</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="category-details-DELETEapi-v1-category--id-">
                        <a href="#category-details-DELETEapi-v1-category--id-">Remove specified category.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="category-details-PUTapi-v1-category--id-">
                        <a href="#category-details-PUTapi-v1-category--id-">Update specified category</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-3" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-user">
                        <a href="#endpoints-GETapi-v1-user">GET api/v1/user</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-4" class="tocify-header">
                <li class="tocify-item level-1" data-unique="product-details">
                    <a href="#product-details">Product Details</a>
                </li>
                                    <ul id="tocify-subheader-product-details" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="product-details-POSTapi-v1-products">
                        <a href="#product-details-POSTapi-v1-products">Insert new product</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="product-details-GETapi-v1-products">
                        <a href="#product-details-GETapi-v1-products">Display all available products</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="product-details-GETapi-v1-products--id-">
                        <a href="#product-details-GETapi-v1-products--id-">Display specific product</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="product-details-DELETEapi-v1-products--id-">
                        <a href="#product-details-DELETEapi-v1-products--id-">Delete specific product</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="product-details-PUTapi-v1-products--id-">
                        <a href="#product-details-PUTapi-v1-products--id-">Update specific product</a>
                    </li>
                                                    </ul>
                            </ul>
        
                        
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: June 21 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="category-details">Category Details</h1>

    <p>List all category operations</p>

            <h2 id="category-details-POSTapi-v1-category">Insert new category</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-category">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/category" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"category_name\": \"animi\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/category"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_name": "animi"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-category">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Category Added Successfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-category" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-category"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-category"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-category" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-category"></code></pre>
</span>
<form id="form-POSTapi-v1-category" data-method="POST"
      data-path="api/v1/category"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-category', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-category"
                    onclick="tryItOut('POSTapi-v1-category');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-category"
                    onclick="cancelTryOut('POSTapi-v1-category');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-category" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/category</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>category_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="category_name"
               data-endpoint="POSTapi-v1-category"
               value="animi"
               data-component="body" hidden>
    <br>
<p>The name of the category.</p>
        </p>
        </form>

            <h2 id="category-details-GETapi-v1-category--id-">Display specified category</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-category--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/category/2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/category/2"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-category--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-category--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-category--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-category--id-"></code></pre>
</span>
<span id="execution-error-GETapi-v1-category--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-category--id-"></code></pre>
</span>
<form id="form-GETapi-v1-category--id-" data-method="GET"
      data-path="api/v1/category/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-category--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-category--id-"
                    onclick="tryItOut('GETapi-v1-category--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-category--id-"
                    onclick="cancelTryOut('GETapi-v1-category--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-category--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/category/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-v1-category--id-"
               value="2"
               data-component="url" hidden>
    <br>
<p>The ID of the category.</p>
            </p>
                    </form>

            <h2 id="category-details-GETapi-v1-category">Display all categories
List all available categories</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-category">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/category" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/category"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-category">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 3,
        &quot;category_name&quot;: &quot;bakery &amp; dairy&quot;,
        &quot;created_at&quot;: &quot;2022-06-08T16:44:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-06-08T16:44:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;category_name&quot;: &quot;belove&quot;,
        &quot;created_at&quot;: &quot;2022-06-08T16:44:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-06-08T17:03:19.000000Z&quot;
    },
    {
        &quot;id&quot;: 5,
        &quot;category_name&quot;: &quot;frozen products&quot;,
        &quot;created_at&quot;: &quot;2022-06-08T16:44:53.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-06-08T16:44:53.000000Z&quot;
    },
    {
        &quot;id&quot;: 6,
        &quot;category_name&quot;: &quot;household&quot;,
        &quot;created_at&quot;: &quot;2022-06-08T16:45:02.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-06-08T16:45:02.000000Z&quot;
    },
    {
        &quot;id&quot;: 7,
        &quot;category_name&quot;: &quot;personal care&quot;,
        &quot;created_at&quot;: &quot;2022-06-08T16:45:12.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-06-08T16:45:12.000000Z&quot;
    },
    {
        &quot;id&quot;: 8,
        &quot;category_name&quot;: &quot;liquor &amp; tobacco&quot;,
        &quot;created_at&quot;: &quot;2022-06-08T16:45:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-06-08T16:45:33.000000Z&quot;
    },
    {
        &quot;id&quot;: 9,
        &quot;category_name&quot;: &quot;grocery&quot;,
        &quot;created_at&quot;: &quot;2022-06-08T16:55:35.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-06-08T16:55:35.000000Z&quot;
    },
    {
        &quot;id&quot;: 10,
        &quot;category_name&quot;: &quot;kids &amp; baby care&quot;,
        &quot;created_at&quot;: &quot;2022-06-08T16:56:06.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-06-08T16:56:06.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-category" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-category"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-category"></code></pre>
</span>
<span id="execution-error-GETapi-v1-category" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-category"></code></pre>
</span>
<form id="form-GETapi-v1-category" data-method="GET"
      data-path="api/v1/category"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-category', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-category"
                    onclick="tryItOut('GETapi-v1-category');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-category"
                    onclick="cancelTryOut('GETapi-v1-category');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-category" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/category</code></b>
        </p>
                    </form>

            <h2 id="category-details-DELETEapi-v1-category--id-">Remove specified category.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-category--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/category/6" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/category/6"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-category--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Category Deleted Successfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-v1-category--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-category--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-category--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-category--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-category--id-"></code></pre>
</span>
<form id="form-DELETEapi-v1-category--id-" data-method="DELETE"
      data-path="api/v1/category/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-category--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-category--id-"
                    onclick="tryItOut('DELETEapi-v1-category--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-category--id-"
                    onclick="cancelTryOut('DELETEapi-v1-category--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-category--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/category/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-v1-category--id-"
               value="6"
               data-component="url" hidden>
    <br>
<p>The ID of the category.</p>
            </p>
                    </form>

            <h2 id="category-details-PUTapi-v1-category--id-">Update specified category</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-category--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/category/18" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"category_name\": \"velit\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/category/18"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_name": "velit"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-category--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
&quot;message&quot;: &quot;Category Updated Successfully
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-v1-category--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-category--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-category--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-category--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-category--id-"></code></pre>
</span>
<form id="form-PUTapi-v1-category--id-" data-method="PUT"
      data-path="api/v1/category/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-category--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-category--id-"
                    onclick="tryItOut('PUTapi-v1-category--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-category--id-"
                    onclick="cancelTryOut('PUTapi-v1-category--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-category--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/category/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-v1-category--id-"
               value="18"
               data-component="url" hidden>
    <br>
<p>The ID of the category.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>category_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="category_name"
               data-endpoint="PUTapi-v1-category--id-"
               value="velit"
               data-component="body" hidden>
    <br>
<p>The name of the category.</p>
        </p>
        </form>

        <h1 id="endpoints">Endpoints</h1>

    

            <h2 id="endpoints-GETapi-v1-user">GET api/v1/user</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-user"></code></pre>
</span>
<span id="execution-error-GETapi-v1-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-user"></code></pre>
</span>
<form id="form-GETapi-v1-user" data-method="GET"
      data-path="api/v1/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-user"
                    onclick="tryItOut('GETapi-v1-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-user"
                    onclick="cancelTryOut('GETapi-v1-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/user</code></b>
        </p>
                    </form>

        <h1 id="product-details">Product Details</h1>

    <p>List all the product operations</p>

            <h2 id="product-details-POSTapi-v1-products">Insert new product</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-products">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/products" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "product_name=iste" \
    --form "order=13" \
    --form "category_id=3" \
    --form "price=18" \
    --form "file=@C:\Users\singo\AppData\Local\Temp\php8E4F.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/products"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('product_name', 'iste');
body.append('order', '13');
body.append('category_id', '3');
body.append('price', '18');
body.append('file', document.querySelector('input[name="file"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-products">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Product Added Successfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-products" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-products"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-products"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-products"></code></pre>
</span>
<form id="form-POSTapi-v1-products" data-method="POST"
      data-path="api/v1/products"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-products', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-products"
                    onclick="tryItOut('POSTapi-v1-products');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-products"
                    onclick="cancelTryOut('POSTapi-v1-products');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-products" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/products</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>product_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="product_name"
               data-endpoint="POSTapi-v1-products"
               value="iste"
               data-component="body" hidden>
    <br>
<p>The name of the product</p>
        </p>
                <p>
            <b><code>order</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="order"
               data-endpoint="POSTapi-v1-products"
               value="13"
               data-component="body" hidden>
    <br>
<p>The arrangement of the product</p>
        </p>
                <p>
            <b><code>category_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="category_id"
               data-endpoint="POSTapi-v1-products"
               value="3"
               data-component="body" hidden>
    <br>
<p>The id of the category</p>
        </p>
                <p>
            <b><code>price</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="price"
               data-endpoint="POSTapi-v1-products"
               value="18"
               data-component="body" hidden>
    <br>
<p>The price of the product</p>
        </p>
                <p>
            <b><code>file</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
                <input type="file"
               name="file"
               data-endpoint="POSTapi-v1-products"
               value=""
               data-component="body" hidden>
    <br>
<p>The image of the product</p>
        </p>
        </form>

            <h2 id="product-details-GETapi-v1-products">Display all available products</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-products">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/products" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/products"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-products">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">[
    {
        &quot;id&quot;: 5,
        &quot;product_name&quot;: &quot;Mouse&quot;,
        &quot;category_id&quot;: 5,
        &quot;order&quot;: &quot;11&quot;,
        &quot;price&quot;: 4500,
        &quot;file&quot;: &quot;1655798819updatedFile.jpg&quot;,
        &quot;created_at&quot;: &quot;2022-06-21T05:43:41.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-06-21T08:06:59.000000Z&quot;
    },
    {
        &quot;id&quot;: 6,
        &quot;product_name&quot;: &quot;Cups&quot;,
        &quot;category_id&quot;: 5,
        &quot;order&quot;: &quot;15&quot;,
        &quot;price&quot;: 5000,
        &quot;file&quot;: &quot;1655799106girl.jpg&quot;,
        &quot;created_at&quot;: &quot;2022-06-21T05:43:58.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-06-21T08:11:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 7,
        &quot;product_name&quot;: &quot;Fan&quot;,
        &quot;category_id&quot;: 3,
        &quot;order&quot;: &quot;3&quot;,
        &quot;price&quot;: 20000,
        &quot;file&quot;: &quot;1655790258girl2.jpg&quot;,
        &quot;created_at&quot;: &quot;2022-06-21T05:44:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-06-21T05:44:18.000000Z&quot;
    },
    {
        &quot;id&quot;: 8,
        &quot;product_name&quot;: &quot;Desk&quot;,
        &quot;category_id&quot;: 3,
        &quot;order&quot;: &quot;4&quot;,
        &quot;price&quot;: 50000,
        &quot;file&quot;: &quot;1655790337girl.jpg&quot;,
        &quot;created_at&quot;: &quot;2022-06-21T05:45:37.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-06-21T05:45:37.000000Z&quot;
    },
    {
        &quot;id&quot;: 9,
        &quot;product_name&quot;: &quot;Laptop&quot;,
        &quot;category_id&quot;: 5,
        &quot;order&quot;: &quot;10&quot;,
        &quot;price&quot;: 120000,
        &quot;file&quot;: &quot;1655792392updatedFile.jpg&quot;,
        &quot;created_at&quot;: &quot;2022-06-21T06:19:52.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-06-21T06:19:52.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-products" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-products"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-products"></code></pre>
</span>
<span id="execution-error-GETapi-v1-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-products"></code></pre>
</span>
<form id="form-GETapi-v1-products" data-method="GET"
      data-path="api/v1/products"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-products', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-products"
                    onclick="tryItOut('GETapi-v1-products');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-products"
                    onclick="cancelTryOut('GETapi-v1-products');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-products" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/products</code></b>
        </p>
                    </form>

            <h2 id="product-details-GETapi-v1-products--id-">Display specific product</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-products--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/products/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/products/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-products--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;No product found.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-products--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-products--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-products--id-"></code></pre>
</span>
<span id="execution-error-GETapi-v1-products--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-products--id-"></code></pre>
</span>
<form id="form-GETapi-v1-products--id-" data-method="GET"
      data-path="api/v1/products/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-products--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-products--id-"
                    onclick="tryItOut('GETapi-v1-products--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-products--id-"
                    onclick="cancelTryOut('GETapi-v1-products--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-products--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/products/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-v1-products--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the product.</p>
            </p>
                    </form>

            <h2 id="product-details-DELETEapi-v1-products--id-">Delete specific product</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-products--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/products/20" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/products/20"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-products--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Product Deleted Successfully&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-v1-products--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-products--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-products--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-products--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-products--id-"></code></pre>
</span>
<form id="form-DELETEapi-v1-products--id-" data-method="DELETE"
      data-path="api/v1/products/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-products--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-products--id-"
                    onclick="tryItOut('DELETEapi-v1-products--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-products--id-"
                    onclick="cancelTryOut('DELETEapi-v1-products--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-products--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/products/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-v1-products--id-"
               value="20"
               data-component="url" hidden>
    <br>
<p>The ID of the product.</p>
            </p>
                    </form>

            <h2 id="product-details-PUTapi-v1-products--id-">Update specific product</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-products--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/v1/products/20" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "category_id=4" \
    --form "order=5" \
    --form "product_name=optio" \
    --form "price=18" \
    --form "file=@C:\Users\singo\AppData\Local\Temp\php8EAE.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/products/20"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('category_id', '4');
body.append('order', '5');
body.append('product_name', 'optio');
body.append('price', '18');
body.append('file', document.querySelector('input[name="file"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-products--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
&quot;message&quot;: &quot;Product Updated Successfully
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-v1-products--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-products--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-products--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-products--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-products--id-"></code></pre>
</span>
<form id="form-PUTapi-v1-products--id-" data-method="PUT"
      data-path="api/v1/products/{id}"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-products--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-products--id-"
                    onclick="tryItOut('PUTapi-v1-products--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-products--id-"
                    onclick="cancelTryOut('PUTapi-v1-products--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-products--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/products/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-v1-products--id-"
               value="20"
               data-component="url" hidden>
    <br>
<p>The ID of the product.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>category_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="category_id"
               data-endpoint="PUTapi-v1-products--id-"
               value="4"
               data-component="body" hidden>
    <br>
<p>The id of category</p>
        </p>
                <p>
            <b><code>order</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="order"
               data-endpoint="PUTapi-v1-products--id-"
               value="5"
               data-component="body" hidden>
    <br>
<p>The order of the product</p>
        </p>
                <p>
            <b><code>product_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="product_name"
               data-endpoint="PUTapi-v1-products--id-"
               value="optio"
               data-component="body" hidden>
    <br>
<p>The name of Product</p>
        </p>
                <p>
            <b><code>price</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="price"
               data-endpoint="PUTapi-v1-products--id-"
               value="18"
               data-component="body" hidden>
    <br>
<p>The price of the product</p>
        </p>
                <p>
            <b><code>file</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
                <input type="file"
               name="file"
               data-endpoint="PUTapi-v1-products--id-"
               value=""
               data-component="body" hidden>
    <br>
<p>The image of the product</p>
        </p>
        </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
