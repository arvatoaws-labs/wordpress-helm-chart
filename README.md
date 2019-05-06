# wordpress-helm-chart

Bugs
* [ ] WORDPRESS_BLOGURL should only contain the first entry from the ingress list

Todos V1
* [ ] use php config from values.yaml in configmap
* [ ] implement exporter for php-fpm
* [ ] add servicemonitor for php-fpm
* [ ] implement exporter for nginx
* [ ] add servicemonitor for nginx
* [ ] add additional parameters for WP_OFFLOAD_BUCKET, WP_OFFLOAD_REGION, WP_OFFLOAD_DOMAIN, WP_OFFLOAD_CLOUDFRONT
* [ ] add iam annotations
* [ ] test rds db integration
* [ ] test s3 integration using fileupload
* [ ] test cloudfront integration
* [ ] test custom image integration 
* [ ] write alarms for php and nginx limits

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