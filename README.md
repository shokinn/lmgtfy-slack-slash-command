# lmgtfy-slack
Let me google that for you bot in Slack. 
Inspired by https://github.com/kenibarwick/lmgtfy-slack.

## Configuration

You can specify the matching token with a environment variable or by using the `config/config.php` configuration file.

### Environment variable

Add the matching token by using the `SLACKSLASHCOMMANDTOKEN` environment variable.

### Configuration file

Copy the sample file (`config/config.sample.php`) to `config.php` and add the mathing token to the variable `$tokenMatch`.
