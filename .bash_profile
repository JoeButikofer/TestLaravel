if [ -f ~/.bashrc ]; then
  source ~/.bashrc
fi

export PATH="$HOME/.composer/vendor/bin:$HOME/.parts/autoparts/bin:$PATH"
eval "$(parts env)"
