<?php

namespace Application\Sonata\UserBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * GroupRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class GroupRepository extends EntityRepository
{
    
    public function getGrupoUsuarioPorTipoUsuario($tipo)
    {
        $nombre = '';
        switch ($tipo) {
            case 'Medico':
                $nombre = 'Medicos';
                break;
            case 'Nutricionista' :
                $nombre = 'Especialistas';
                break;
            case 'Preparador Fisico':
                $nombre = 'Especialistas';
                break;
            case 'Paciente':
                $nombre = 'Pacientes';
                break;
            default:
                $nombre = null;
                break;
        }
        
        if(is_null($nombre))
            return null;
        
        $grupos = $this->getGrupoPorNombreQuery($nombre)->getQuery()->getResult();
        return (count($grupos) > 0) ? $grupos[0] : null;
    }
    
    public function getGrupoPorNombreQuery($nombre)
    {
        $query = $this->createQueryBuilder('G')
                ->where('G.name = :nombre')
                ->setParameter(':nombre', $nombre);
        
        return $query;
    }
    
    
}
