<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/figuren-theater/code-quality">
    <img src="https://raw.githubusercontent.com/figuren-theater/logos/main/favicon.png" alt="figuren.theater Logo" width="100" height="100">
  </a>

  <h1 align="center">figuren.theater | Code Quality</h1>

  <p align="center">
    Development tools to measure and test the code quality of <a href="https://figuren.theater">figuren.theater</a>, the WordPress Multisite network for puppeteers.
    <br /><br /><br />
    <a href="https://meta.figuren.theater/blog"><strong>Read our blog</strong></a>
    <br />
    <br />
    <a href="https://figuren.theater">See the network in action</a>
    •
    <a href="https://mein.figuren.theater">Join the network</a>
    •
    <a href="https://websites.fuer.figuren.theater">Create your own network</a>
  </p>
</div>

## About 


This is the long desc

* [x] *list closed tracking-issues or `docs` files here*
* [ ] Do you have any [ideas](/issues/new) ?

## Background & Motivation


See the workflow running for the figuren.theater platform

||Repo|Code Quality|
|-:|-|-|
|  1. |[ft-admin-ui](https://github.com/figuren-theater/ft-admin-ui)|   |
|  2. |[ft-core](https://github.com/figuren-theater/ft-core/)| [![Build, test & measure](https://github.com/figuren-theater/ft-core/actions/workflows/required/figuren-theater/code-quality/.github/workflows/build-test-measure.yml/badge.svg)](https://github.com/figuren-theater/ft-core/actions/workflows/required/figuren-theater/code-quality/.github/workflows/build-test-measure.yml) |
|  3. |[ft-coresites](https://github.com/figuren-theater/ft-coresites)|   |
|  4. |[ft-data](https://github.com/figuren-theater/ft-data)|   |
|  5. | └── [ft-network-sourcelinks](https://github.com/figuren-theater/ft-network-sourcelinks)|   |
|  6. |[ft-interactive](https://github.com/figuren-theater/ft-interactive)|   |
|  7. |[ft-maintenance](https://github.com/figuren-theater/ft-maintenance)|   |
|  8. |[ft-media](https://github.com/figuren-theater/ft-media)|   |
|  9. |[ft-onboarding](https://github.com/figuren-theater/ft-onboarding)|   |
|  10.| ├── [ft-core-block-domaincheck](https://github.com/figuren-theater/ft-core-block-domaincheck)|   |
|  11.| └── [install.php](https://github.com/figuren-theater/install.php)|   |
|  12.|[ft-options](https://github.com/figuren-theater/ft-options)|   |
|  13.|[ft-performance](https://github.com/figuren-theater/ft-performance)|   |
|  14.|[ft-platform](https://github.com/figuren-theater/ft-platform/)| [![Build, test & measure](https://github.com/figuren-theater/ft-platform/actions/workflows/required/figuren-theater/code-quality/.github/workflows/build-test-measure.yml/badge.svg)](https://github.com/figuren-theater/ft-platform/actions/workflows/required/figuren-theater/code-quality/.github/workflows/build-test-measure.yml) |
|  15.|[ft-platform-collection](https://github.com/figuren-theater/ft-platform-collection/)| |
|  16.|[ft-privacy](https://github.com/figuren-theater/ft-privacy)|   |
|  17.|[ft-routes](https://github.com/figuren-theater/ft-routes)|   |
|  18.|[ft-security](https://github.com/figuren-theater/ft-security)|   |
|  19.|[ft-seo](https://github.com/figuren-theater/ft-seo)|   |
|  20.|[ft-site-editing](https://github.com/figuren-theater/ft-site-editing)|   |
|  21.| ├── [ft-network-block-editor](https://github.com/figuren-theater/ft-network-block-editor)|   |
|  22.| └── [ft-network-block-patterns](https://github.com/figuren-theater/ft-network-block-patterns)|   |
|  23.|[ft-themes](https://github.com/figuren-theater/ft-themes)|   |
|  24.|[ft-theming](https://github.com/figuren-theater/ft-theming)|   |
|  25.|[.github](https://github.com/figuren-theater/.github/)| [![Build, test & measure](https://github.com/figuren-theater/.github/actions/workflows/required/figuren-theater/code-quality/.github/workflows/build-test-measure.yml/badge.svg)](https://github.com/figuren-theater/.github/actions/workflows/required/figuren-theater/code-quality/.github/workflows/build-test-measure.yml) |


## Install

1. Add this repository to your `composer.json`
    ```json
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/figuren-theater/code-quality"
        }
    ]
    ```

2. Install via command line
    ```sh
    composer require --dev figuren-theater/code-quality
    ```
3. Create a [phpstan.neon](https://github.com/figuren-theater/new-ft-module/blob/main/phpstan.neon) file in the root of the repository

---

4. Enable the **Build, test & measure** workflow as required status check for the repo in *[Org >> Settings >> Actions](https://github.com/organizations/figuren-theater/settings/actions)* under **Required workflows** 
(This step is needed until all repos require this status check by default.) 

## Usage

```sh
composer normalize
```
```sh
vendor/bin/phpstan analyse -nvv
```


## Built with & uses

  - [dependabot](/.github/dependabot.yml)
  - [phpstan-wordpress](https://github.com/szepeviktor/phpstan-wordpress)
  - [composer normalize](https://github.com/ergebnis/composer-normalize)

## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request


## Versioning

We use [Semantic Versioning](http://semver.org/) for versioning. For the versions
available, see the [tags on this repository](/tags).

## Authors

  - **Carsten Bach** - *Provided idea & code* - [figuren.theater/crew](https://figuren.theater/crew/)

See also the list of [contributors](/contributors)
who participated in this project.

## License

This project is licensed under the [GPL-3.0-or-later](LICENSE.md), see the [LICENSE](LICENSE) file for
details

## Acknowledgments

  - [@szepeviktor](https://github.com/szepeviktor) for all wonderful sharings over the last years especially
  - [altis](https://github.com/search?q=org%3Ahumanmade+altis) by humanmade, as our digital role model and inspiration
  - [@roborourke](https://github.com/roborourke) for his clear & understandable [coding guidelines](https://docs.altis-dxp.com/guides/code-review/standards/)
  - [python-project-template](https://github.com/rochacbruno/python-project-template) for their nice template->repo renaming workflow
