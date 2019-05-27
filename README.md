# wordpress-helm-chart

Bugs
* [x] WORDPRESS_BLOGURL should only contain the first entry from the ingress list
* [ ] fix inspec tests

Todos V1
* [x] use php config from values.yaml in configmap
* [ ] implement exporter for php-fpm # sven + andreas
* [ ] add servicemonitor for php-fpm # sven + andreas
* [ ] implement exporter for nginx # sven + andreas
* [ ] add servicemonitor for nginx # sven + andreas
* [x] add additional parameters for WP_OFFLOAD_BUCKET, WP_OFFLOAD_REGION, WP_OFFLOAD_DOMAIN, WP_OFFLOAD_CLOUDFRONT
* [x] add iam annotations
* [X] test rds db integration
* [X] test s3 integration using fileupload
* [X] test cloudfront integration
* [x] test custom image integration 
* [ ] write alarms for php and nginx limits
* [X] fix plugin activation mechanism

Todos V2
* [ ] add nginx rate limit for dynamic calls
  - Or do this is the traefik ingress?
* [ ] add security headers
  - Treafik: ingress.kubernetes.io/content-security-policy: VALUE, ingress.kubernetes.io/browser-xss-filter: "true", ingress.kubernetes.io/content-type-nosniff: "true", ingress.kubernetes.io/custom-frame-options-value: VALUE, ingress.kubernetes.io/force-hsts: "false", etc. (https://docs.traefik.io/configuration/backends/kubernetes/#security-headers-annotations)
* [ ] add ip auth for wp-admin?
  - Traefik: traefik.ingress.kubernetes.io/whitelist-source-range: "1.2.3.0/24, fe80::/16"
* [ ] add internal php upstream for status
* [ ] add pod disruption budget
* [ ] create grafana dashboard

Todo V3
* [ ] add hpa scaling based on php childs https://itnext.io/horizontal-pod-autoscale-with-custom-metrics-8cb13e9d475
* [ ] implement cache based on redis https://www.cloudways.com/blog/install-redis-cache-wordpress/#Use-W3TC-to-Configure-Redis-Cache
