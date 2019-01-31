#!/bin/bash
set -v
if [ "${CIRCLE_BRANCH}" != "develop" ]; then
  # GitHubのPull Requestにコメントをするために必要なgemのインストールをします
  echo gem install
  gem install --no-document checkstyle_filter-git saddler saddler-reporter-github

  # pull requestがないか確認します
  if [ -z "${CI_PULL_REQUEST}" ]; then
    # when not pull request
    REPORTER=Saddler::Reporter::Github::CommitReviewComment
  else
    REPORTER=Saddler::Reporter::Github::PullRequestReviewComment
  fi

  # git diffからphpファイルを取り出し、php_codesniferのコマンドを実行します
  echo saddler
  git diff --name-only origin/develop \
    | grep -e '.php$' \
    | xargs application/vendor/bin/phpcs -n --standard=PSR2 --report=checkstyle \
    | checkstyle_filter-git diff origin/develop \
    | saddler report --require saddler/reporter/github --reporter $REPORTER

fi
