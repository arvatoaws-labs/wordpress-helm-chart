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
* [ ] fix plugin activation mechanism

Todos V2
* [ ] add nginx rate limit for dynamic calls
* [ ] add security headers
* [ ] add ip auth for wp-admin?
* [ ] add internal php upstream for status
* [ ] add pod disruption budget
* [ ] create grafana dashboard
* [ ] TBD

Todo V3
* [ ] add hpa scaling based on php childs https://itnext.io/horizontal-pod-autoscale-with-custom-metrics-8cb13e9d475
* [ ] implement cache based on redis https://www.cloudways.com/blog/install-redis-cache-wordpress/#Use-W3TC-to-Configure-Redis-Cache
