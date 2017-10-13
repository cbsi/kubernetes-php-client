# V1PersistentVolumeSpec

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_modes** | **string[]** | AccessModes contains all ways the volume can be mounted. More info: https://kubernetes.io/docs/concepts/storage/persistent-volumes#access-modes | [optional] 
**aws_elastic_block_store** | [**\CBSi\Kubernetes\Model\V1AWSElasticBlockStoreVolumeSource**](V1AWSElasticBlockStoreVolumeSource.md) | AWSElasticBlockStore represents an AWS Disk resource that is attached to a kubelet&#39;s host machine and then exposed to the pod. More info: https://kubernetes.io/docs/concepts/storage/volumes#awselasticblockstore | [optional] 
**azure_disk** | [**\CBSi\Kubernetes\Model\V1AzureDiskVolumeSource**](V1AzureDiskVolumeSource.md) | AzureDisk represents an Azure Data Disk mount on the host and bind mount to the pod. | [optional] 
**azure_file** | [**\CBSi\Kubernetes\Model\V1AzureFileVolumeSource**](V1AzureFileVolumeSource.md) | AzureFile represents an Azure File Service mount on the host and bind mount to the pod. | [optional] 
**capacity** | **map[string,string]** | A description of the persistent volume&#39;s resources and capacity. More info: https://kubernetes.io/docs/concepts/storage/persistent-volumes#capacity | [optional] 
**cephfs** | [**\CBSi\Kubernetes\Model\V1CephFSVolumeSource**](V1CephFSVolumeSource.md) | CephFS represents a Ceph FS mount on the host that shares a pod&#39;s lifetime | [optional] 
**cinder** | [**\CBSi\Kubernetes\Model\V1CinderVolumeSource**](V1CinderVolumeSource.md) | Cinder represents a cinder volume attached and mounted on kubelets host machine More info: https://releases.k8s.io/HEAD/examples/mysql-cinder-pd/README.md | [optional] 
**claim_ref** | [**\CBSi\Kubernetes\Model\V1ObjectReference**](V1ObjectReference.md) | ClaimRef is part of a bi-directional binding between PersistentVolume and PersistentVolumeClaim. Expected to be non-nil when bound. claim.VolumeName is the authoritative bind between PV and PVC. More info: https://kubernetes.io/docs/concepts/storage/persistent-volumes#binding | [optional] 
**fc** | [**\CBSi\Kubernetes\Model\V1FCVolumeSource**](V1FCVolumeSource.md) | FC represents a Fibre Channel resource that is attached to a kubelet&#39;s host machine and then exposed to the pod. | [optional] 
**flex_volume** | [**\CBSi\Kubernetes\Model\V1FlexVolumeSource**](V1FlexVolumeSource.md) | FlexVolume represents a generic volume resource that is provisioned/attached using an exec based plugin. This is an alpha feature and may change in future. | [optional] 
**flocker** | [**\CBSi\Kubernetes\Model\V1FlockerVolumeSource**](V1FlockerVolumeSource.md) | Flocker represents a Flocker volume attached to a kubelet&#39;s host machine and exposed to the pod for its usage. This depends on the Flocker control service being running | [optional] 
**gce_persistent_disk** | [**\CBSi\Kubernetes\Model\V1GCEPersistentDiskVolumeSource**](V1GCEPersistentDiskVolumeSource.md) | GCEPersistentDisk represents a GCE Disk resource that is attached to a kubelet&#39;s host machine and then exposed to the pod. Provisioned by an admin. More info: https://kubernetes.io/docs/concepts/storage/volumes#gcepersistentdisk | [optional] 
**glusterfs** | [**\CBSi\Kubernetes\Model\V1GlusterfsVolumeSource**](V1GlusterfsVolumeSource.md) | Glusterfs represents a Glusterfs volume that is attached to a host and exposed to the pod. Provisioned by an admin. More info: https://releases.k8s.io/HEAD/examples/volumes/glusterfs/README.md | [optional] 
**host_path** | [**\CBSi\Kubernetes\Model\V1HostPathVolumeSource**](V1HostPathVolumeSource.md) | HostPath represents a directory on the host. Provisioned by a developer or tester. This is useful for single-node development and testing only! On-host storage is not supported in any way and WILL NOT WORK in a multi-node cluster. More info: https://kubernetes.io/docs/concepts/storage/volumes#hostpath | [optional] 
**iscsi** | [**\CBSi\Kubernetes\Model\V1ISCSIVolumeSource**](V1ISCSIVolumeSource.md) | ISCSI represents an ISCSI Disk resource that is attached to a kubelet&#39;s host machine and then exposed to the pod. Provisioned by an admin. | [optional] 
**local** | [**\CBSi\Kubernetes\Model\V1LocalVolumeSource**](V1LocalVolumeSource.md) | Local represents directly-attached storage with node affinity | [optional] 
**nfs** | [**\CBSi\Kubernetes\Model\V1NFSVolumeSource**](V1NFSVolumeSource.md) | NFS represents an NFS mount on the host. Provisioned by an admin. More info: https://kubernetes.io/docs/concepts/storage/volumes#nfs | [optional] 
**persistent_volume_reclaim_policy** | **string** | What happens to a persistent volume when released from its claim. Valid options are Retain (default) and Recycle. Recycling must be supported by the volume plugin underlying this persistent volume. More info: https://kubernetes.io/docs/concepts/storage/persistent-volumes#reclaiming | [optional] 
**photon_persistent_disk** | [**\CBSi\Kubernetes\Model\V1PhotonPersistentDiskVolumeSource**](V1PhotonPersistentDiskVolumeSource.md) | PhotonPersistentDisk represents a PhotonController persistent disk attached and mounted on kubelets host machine | [optional] 
**portworx_volume** | [**\CBSi\Kubernetes\Model\V1PortworxVolumeSource**](V1PortworxVolumeSource.md) | PortworxVolume represents a portworx volume attached and mounted on kubelets host machine | [optional] 
**quobyte** | [**\CBSi\Kubernetes\Model\V1QuobyteVolumeSource**](V1QuobyteVolumeSource.md) | Quobyte represents a Quobyte mount on the host that shares a pod&#39;s lifetime | [optional] 
**rbd** | [**\CBSi\Kubernetes\Model\V1RBDVolumeSource**](V1RBDVolumeSource.md) | RBD represents a Rados Block Device mount on the host that shares a pod&#39;s lifetime. More info: https://releases.k8s.io/HEAD/examples/volumes/rbd/README.md | [optional] 
**scale_io** | [**\CBSi\Kubernetes\Model\V1ScaleIOVolumeSource**](V1ScaleIOVolumeSource.md) | ScaleIO represents a ScaleIO persistent volume attached and mounted on Kubernetes nodes. | [optional] 
**storage_class_name** | **string** | Name of StorageClass to which this persistent volume belongs. Empty value means that this volume does not belong to any StorageClass. | [optional] 
**storageos** | [**\CBSi\Kubernetes\Model\V1StorageOSPersistentVolumeSource**](V1StorageOSPersistentVolumeSource.md) | StorageOS represents a StorageOS volume that is attached to the kubelet&#39;s host machine and mounted into the pod More info: https://releases.k8s.io/HEAD/examples/volumes/storageos/README.md | [optional] 
**vsphere_volume** | [**\CBSi\Kubernetes\Model\V1VsphereVirtualDiskVolumeSource**](V1VsphereVirtualDiskVolumeSource.md) | VsphereVolume represents a vSphere volume attached and mounted on kubelets host machine | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


