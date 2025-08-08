<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * KillSession请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method array getSessionId() 获取会话ID列表
 * @method void setSessionId(array $SessionId) 设置会话ID列表
 * @method string getNodeId() 获取节点ID，可指定主节点或者备节点进行kill。可选参数，不传默认为主节点。
 * @method void setNodeId(string $NodeId) 设置节点ID，可指定主节点或者备节点进行kill。可选参数，不传默认为主节点。
 */
class KillSessionRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var array 会话ID列表
     */
    public $SessionId;

    /**
     * @var string 节点ID，可指定主节点或者备节点进行kill。可选参数，不传默认为主节点。
     */
    public $NodeId;

    /**
     * @param string $InstanceId 实例ID
     * @param array $SessionId 会话ID列表
     * @param string $NodeId 节点ID，可指定主节点或者备节点进行kill。可选参数，不传默认为主节点。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }
    }
}
