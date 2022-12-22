<?php
// This file was auto-generated from sdk-root/src/data/kinesis-video-webrtc-storage/2018-05-10/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2018-05-10', 'endpointPrefix' => 'kinesisvideo', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'Amazon Kinesis Video WebRTC Storage', 'serviceId' => 'Kinesis Video WebRTC Storage', 'signatureVersion' => 'v4', 'signingName' => 'kinesisvideo', 'uid' => 'kinesis-video-webrtc-storage-2018-05-10', ], 'operations' => [ 'JoinStorageSession' => [ 'name' => 'JoinStorageSession', 'http' => [ 'method' => 'POST', 'requestUri' => '/joinStorageSession', 'responseCode' => 200, ], 'input' => [ 'shape' => 'JoinStorageSessionInput', ], 'errors' => [ [ 'shape' => 'ClientLimitExceededException', ], [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'JoinStorageSessionAsViewer' => [ 'name' => 'JoinStorageSessionAsViewer', 'http' => [ 'method' => 'POST', 'requestUri' => '/joinStorageSessionAsViewer', 'responseCode' => 200, ], 'input' => [ 'shape' => 'JoinStorageSessionAsViewerInput', ], 'errors' => [ [ 'shape' => 'ClientLimitExceededException', ], [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'ChannelArn' => [ 'type' => 'string', 'pattern' => '^arn:(aws[a-zA-Z-]*):kinesisvideo:[a-z0-9-]+:[0-9]+:[a-z]+/[a-zA-Z0-9_.-]+/[0-9]+$', ], 'ClientId' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '[a-zA-Z0-9_.-]+', ], 'ClientLimitExceededException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidArgumentException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'JoinStorageSessionAsViewerInput' => [ 'type' => 'structure', 'required' => [ 'channelArn', 'clientId', ], 'members' => [ 'channelArn' => [ 'shape' => 'ChannelArn', ], 'clientId' => [ 'shape' => 'ClientId', ], ], ], 'JoinStorageSessionInput' => [ 'type' => 'structure', 'required' => [ 'channelArn', ], 'members' => [ 'channelArn' => [ 'shape' => 'ChannelArn', ], ], ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'String' => [ 'type' => 'string', ], ],];
