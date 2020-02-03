# wordpress-helm-chart

This chart is for use with the docker-wordpress project from https://github.com/arvatoaws-labs/docker-wordpress

Features
* seperate containers for nginx and php
* support for exporters and services monitors (see exporters and monitoring section in values.yaml)
* support for wp media offload plugin (see offload section in values.yaml)
* support for external secrets using paramater store (see externalSecrets section in values.yaml)
* support for pre-install, post-install, pre-upgrade and post-upgrade hooks (see hooks section in values.yaml)
* support for hpa (static config 80% cpu usuage min replicaCount max 10)
* support for custom php config (see php section in values.yaml)