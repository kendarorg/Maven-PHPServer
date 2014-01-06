<?php

$base_url = URL::base(TRUE, TRUE) . 'browse/';

$template = <<<CONTENT
<?xml version="1.0" encoding="UTF-8"?>
<settings xsi:schemaLocation="http://maven.apache.org/SETTINGS/1.1.0 http://maven.apache.org/xsd/settings-1.1.0.xsd" xmlns="http://maven.apache.org/SETTINGS/1.1.0"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
  <profiles>
    <profile>
      <repositories>
        <repository>
          <snapshots>
            <enabled>false</enabled>
          </snapshots>
          <id>central</id>
          <name>libs-release-bintray</name>
          <url>{$base_url}libs-release-bintray</url>
        </repository>
        <repository>
          <snapshots />
          <id>snapshots</id>
          <name>third-party-snapshots</name>
          <url>{$base_url}third-party-snapshots</url>
        </repository>
      </repositories>
      <pluginRepositories>
        <pluginRepository>
          <snapshots>
            <enabled>false</enabled>
          </snapshots>
          <id>central</id>
          <name>plugins-releases</name>
          <url>{$base_url}plugins-releases</url>
        </pluginRepository>
        <pluginRepository>
          <snapshots />
          <id>snapshots</id>
          <name>plugins-snapshots</name>
          <url>{$base_url}plugins-snapshots</url>
        </pluginRepository>
      </pluginRepositories>
      <id>phpmaven</id>
    </profile>
  </profiles>
  <activeProfiles>
    <activeProfile>phpmaven</activeProfile>
  </activeProfiles>
</settings>
CONTENT;
?>
<div>
	<form role="form">
		<textarea class="form-control" rows="30" readonly="readonly"><?php echo htmlspecialchars($template); ?></textarea>
	</form>
</div>