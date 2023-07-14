# japan-zipcode-viewer

This is a simple webpage to view Japan zipcode data download from [Japan Post](https://www.post.japanpost.jp/zipcode/download.html).

It is developed base on PHP framework yii2 version 2.0.48.

## Setup

* Pull from github
  ```shell
  git clone git@github.com:umbalaconmeogia/japan-zipcode-viewer.git
  ```
* Install PHP library dependencies
  ```shell
  cd src/app
  composer install
  ```
* Start the server from command line
   ```shell
   php yii serve --port=8888
   ```
   then access from http://localhost:8888/

## Operation

* Update to newest data (TBD).
* Set data version
  ```shell
  php yii system-setting/set-zipcode-version <version>
  ```

## Preferences
* [Zipcode data download top](https://www.post.japanpost.jp/zipcode/download.html)
* [CSV download](https://www.post.japanpost.jp/zipcode/dl/kogaki-zip.html)
* [CSV header description](https://www.post.japanpost.jp/zipcode/dl/readme.html)