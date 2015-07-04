GitHub API - CodeIgniter - SemanticUI
==================

```
                   ____   _   _     _   _           _     
                  / ___| (_) | |_  | | | |  _   _  | |__  
                 | |  _  | | | __| | |_| | | | | | | '_ \ 
                 | |_| | | | | |_  |  _  | | |_| | | |_) |
                  \____| |_|  \__| |_| |_|  \__,_| |_.__/ 
                                                          
                 __                   _                   
                (_   _   _ o  _. |   /   _   _| o ._   _  
                __) (_) (_ | (_| |   \_ (_) (_| | | | (_| 
                                                       _| 

```

This applications built with CodeIgniter V3 + HMVC, Gihub API, Semantic UI.

## Dependency

- [CodeIgniter](https://github.com/bcit-ci/CodeIgniter)
- [Semantic UI](https://github.com/Semantic-Org/Semantic-UI)
- [GitHub API (GitHubIndonesia - list-repository)](https://github.com/GitHubIndonesia/list-repository)

## Install

- Step 1
    - Zip ball
        - [Download this repository.](https://github.com/SunDi3yansyah/GitHubAPI-CodeIgniter-SemanticUI/archive/master.zip)
        - Move all file to your web server directory.
    - Clone repository:
        - Open your command line.
        - Move to your web server directory.
        ```
        git clone https://github.com/SunDi3yansyah/GitHubAPI-CodeIgniter-SemanticUI
        ```
    - Bower
        - Open your command line.
        - Move to your web server directory.
        ```
        bower install SunDi3yansyah/GitHubAPI-CodeIgniter-SemanticUI
        ```

- Step 2
    - Edit file
        ```
        ../application/config/config_custom.php
        ```
    - You will see code like this
    ```
    $config['token'] = 'SHA1';
    $config['github_username'] = 'your-username';
    ```
    - Change the value with your token and username from GitHub
    - Open this link https://github.com/settings/applications
    - you will see a box section __Personal access tokens__
    - Click button __Generate new token__
    - Enter your desired __Token description__
    - Enter your desired __Select scopes__
    - Click __Generate token__
    - Copy token that you just made to the file __Homepage.php__
- Step 3
    - Edit file
    ```
    ../application/config/config_custom.php
    ```
    - Change according to what you want, I hope you can fill in all fields
    - Finished you can see the results by pointing the browser to `http://localhost` / `http://localhost/project` / `http://your.site` / etc... up to you.

## License
- [MIT](LICENSE)