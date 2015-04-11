SunDi3yansyah
==================

This applications built with CodeIgniter V3 + HMVC, Gihub API, Semantic UI.

## Dependency

- [CodeIgniter](https://github.com/bcit-ci/CodeIgniter)
- [Semantic UI](https://github.com/Semantic-Org/Semantic-UI)
- [GitHub API (GitHubIndonesia - list-repository)](https://github.com/GitHubIndonesia/list-repository)

## Install

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

- NEXT
    - Edit file
    ```
    https://github.com/SunDi3yansyah/GitHubAPI-CodeIgniter-SemanticUI/blob/master/application/modules/public/controllers/Homepage.php
    ```
    - You will see code like this
    ```
    $user = 'YOUR-USERNAME';
    $token = 'YOUR-TOKEN-APP';
    ```
    - Change the value with your token and username from GitHub
    - Open this link https://github.com/settings/applications
    - you will see a box section __Personal access tokens__
    - Click button __Generate new token__
    - Enter your desired __Token description__
    - Enter your desired __Select scopes__
    - Click __Generate token__
    - Copy token that you just made to the file __Homepage.php__

## License
- [MIT](LICENSE)