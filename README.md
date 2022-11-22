# PHP CLI Demo
PHP command-line tool demonstration

## Install
This CLI application is a small game written in PHP and is installed using Composer:

```composer global require okmarq/php-cli-demo```

Make sure the ~/.composer/vendor/bin directory is in your system's PATH.

- Show me how

If it's not already there, add the following line to your Bash configuration file (usually ```~/.bash_profile, ~/.bashrc, ~/.zshrc``` , etc.):

```export PATH=~/.composer/vendor/bin:$PATH```
If the file doesn't exist, create it.

Run the following command on the file you've just updated for the change to take effect:

```source ~/.bash_profile```

## Use

All you need to do is call the play command to start the game:

```busiverse play```

## Update

```composer global update okmarq/php-cli-demo```

## Delete

```composer global remove okmarq/php-cli-demo```